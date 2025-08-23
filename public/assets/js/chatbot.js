const chatbotToggler = document.querySelector(".chatbot-toggler");
const closeBtn = document.querySelector(".close-btn");
const chatbox = document.querySelector(".chatbox");
const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");

let userMessage = null;
let hasGreeted = false; // Untuk mencegah sapaan berulang
const inputInitHeight = chatInput.scrollHeight;

// API configuration
const API_KEY = "AIzaSyD4YmoErkP-7nP1DlyqIsENsRtbt-o2DrE";
const API_URL = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${API_KEY}`;

// Tambahkan peran admin kampus di sini (context injection)
const SYSTEM_PROMPT = `
Kamu adalah asisten ramah untuk **Si Pental** (Sistem Informasi Kesehatan Mental).
Tugasmu: menjawab pertanyaan seputar Si Pental dan edukasi kesehatan mental secara singkat, jelas, empatik, dan non-menghakimi.

## Lingkup Layanan Si Pental
1) Informasi Kesehatan Mental
   - Definisi, pentingnya kesehatan mental, faktor yang memengaruhi (tidur, makan, olahraga, lingkungan, emosi, media sosial).
2) Penyebab Gangguan Mental
   - Bullying, homesick, stres belajar/kerja, tekanan sosial/overthinking, trauma, lingkungan toxic, kesepian, penyalahgunaan zat, masalah ekonomi, gangguan tidur, faktor keluarga/biologis.
3) Tanda-Tanda Umum
   - Cemas berlebihan, gangguan tidur, kehilangan minat, menarik diri, emosi tidak stabil, sulit fokus, perubahan makan/berat badan, pikiran negatif berulang.
4) Tips & Trik Menjaga Kesehatan Mental
   - Gaya hidup sehat, relaksasi/napas dalam, journaling, batasi sosmed, bangun support system, kembangkan hobi, latihan bersyukur, cari bantuan profesional bila perlu.
5) Ruang Curhat (Chat Bot)
   - Dengarkan dengan empati, validasi perasaan, berikan saran ringan, arahkan ke artikel/fitur terkait.
6) Cek Kesehatan Mental (Kuesioner)
   - Skala sederhana untuk self-check: hasilnya indikatif (Sehat, Stres Ringan, Stres Sedang, Perlu Konsultasi). Tidak menggantikan diagnosis profesional.
7) Ruang Konseling (WhatsApp BK)
   - Tawarkan tombol/tautan WA untuk terhubung dengan konselor: {{WA_BK}} (ganti di kode).
   - Rahasiakan data pengguna, dorong konsultasi saat gejala mengganggu aktivitas.

## Routing Link (jika pengguna minta "lihat" / "ke halaman")
- Informasi: #content-2
- Penyebab: #penyebab
- Tanda-tanda: #tanda
- Tips & Trik: #tips
- Ruang Curhat (chat bot): #chat
- Cek Kesehatan Mental (kuesioner): #kuesioner
- Konseling (WA BK): {{WA_BK}}

Saat relevan, sertakan CTA ringkas seperti:
- "Lihat informasi: #penyebab"
- "Mulai cek: #kuesioner"
- "Hubungi konselor: {{WA_BK}}"

## Gaya Jawaban
- Bahasa Indonesia, hangat, empatik, ringkas (2–5 kalimat); gunakan bullet jika perlu.
- Jangan membuat diagnosis. Sertakan penafian singkat bila memberi saran: "Ini bukan pengganti konsultasi profesional."
- Jika pertanyaan di luar cakupan Si Pental (mis. info kampus umum), jawab singkat bahwa fokus bot ini adalah kesehatan mental di Si Pental dan arahkan ke halaman terkait jika ada.

## Protokol Krisis (sangat penting)
Jika pengguna menunjukkan risiko membahayakan diri/orang lain, pikiran bunuh diri, atau keadaan darurat:
1) Tanggap-empatik: validasi perasaan, hindari penghakiman.
2) Anjurkan bantuan segera dari orang tepercaya/layanan darurat setempat.
3) Berikan bantuan cepat Indonesia:
   - Layanan SEJIWA: telepon **119 ext. 8**
   - Darurat medis/keamanan: **112**
   - Hubungi konselor via WA: {{WA_BK}}
4) Jangan menunda, jangan berdebat, jangan memberi langkah medis/psikologis teknis.

## Contoh Respons Singkat
- "Homesick itu wajar, coba atur rutinitas harian ringan dan ngobrol dengan teman/keluarga. Kamu juga bisa baca bagian Penyebab dan Tips. Lihat: #penyebab, #tips."
- "Kalau sering cemas dan sulit tidur, boleh coba teknik napas 4-7-8 dan journaling. Ini bukan pengganti konsultasi; kalau mengganggu aktivitas, pertimbangkan chat konselor: {{WA_BK}}."

Tetap konsisten, empatik, dan jaga privasi pengguna.
`;

const createChatLi = (message, className) => {
  const chatLi = document.createElement("li");
  chatLi.classList.add("chat", className);
  let chatContent = className === "outgoing" ? `<p></p>` : `<span class="material-symbols-outlined">smart_toy</span><p></p>`;
  chatLi.innerHTML = chatContent;
  chatLi.querySelector("p").textContent = message;
  return chatLi;
};

const generateResponse = async (chatElement) => {
  const messageElement = chatElement.querySelector("p");

  const requestOptions = {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      contents: [
        {
          role: "user",
          parts: [{ text: `${SYSTEM_PROMPT}\n\nPertanyaan pengguna: ${userMessage}` }]
        }
      ]
    }),
  };

  try {
    const response = await fetch(API_URL, requestOptions);
    const data = await response.json();
    if (!response.ok) throw new Error(data.error.message);

    messageElement.textContent = data.candidates[0].content.parts[0].text.replace(/\*\*(.*?)\*\*/g, "$1");
  } catch (error) {
    messageElement.classList.add("error");
    messageElement.textContent = error.message;
  } finally {
    chatbox.scrollTo(0, chatbox.scrollHeight);
  }
};

const handleChat = () => {
  userMessage = chatInput.value.trim();
  if (!userMessage) return;

  chatInput.value = "";
  chatInput.style.height = `${inputInitHeight}px`;

  chatbox.appendChild(createChatLi(userMessage, "outgoing"));
  chatbox.scrollTo(0, chatbox.scrollHeight);

  setTimeout(() => {
    const incomingChatLi = createChatLi("Sedang mengetik...", "incoming");
    chatbox.appendChild(incomingChatLi);
    chatbox.scrollTo(0, chatbox.scrollHeight);
    generateResponse(incomingChatLi);
  }, 600);
};

// Fungsi menyapa pengguna saat pertama kali dibuka
const sendInitialGreeting = () => {
  if (hasGreeted) return;
  hasGreeted = true;
  const greeting = "Halo Pengguna SI Pental 👋, ada yang bisa saya bantu?";
  const greetingLi = createChatLi(greeting, "incoming");
  chatbox.appendChild(greetingLi);
  chatbox.scrollTo(0, chatbox.scrollHeight);
};

chatInput.addEventListener("input", () => {
  chatInput.style.height = `${inputInitHeight}px`;
  chatInput.style.height = `${chatInput.scrollHeight}px`;
});

chatInput.addEventListener("keydown", (e) => {
  if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
    e.preventDefault();
    handleChat();
  }
});

sendChatBtn.addEventListener("click", handleChat);
closeBtn.addEventListener("click", () => {
  document.body.classList.remove("show-chatbot");
  hasGreeted = false; // Reset sapaan saat ditutup
});
chatbotToggler.addEventListener("click", () => {
  document.body.classList.toggle("show-chatbot");
  if (document.body.classList.contains("show-chatbot")) {
    sendInitialGreeting(); // Panggil sapaan saat chatbot dibuka
  }
});
