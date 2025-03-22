# AI Web Tools Starter 🚀

A simple PHP-based starter template for building AI-powered web tools using the OpenAI API.  
Includes a working example of a **Grammar Checker Tool**.

---

## ✨ Features

- Uses OpenAI's Chat API (`gpt-4o`)
- Simple HTML + PHP (no frameworks)
- Clean UI with POST-based form
- Easily customizable for other AI use cases
- Secure API key management via `key.php`

---

## 📦 What's Included

```
├── index.php         # Main file with form and API call
├── key.php           # Stores your OpenAI API key
└── README.md         # You're here!
```

---

## ⚙️ Setup Instructions

1. **Clone this repo:**
   ```bash
   git clone https://github.com/farazahmed84/ai-web-tools-starter.git
   cd ai-web-tools-starter
   ```

2. **Add your OpenAI API key:**

   Create a `key.php` file in the same directory and paste in:

   ```php
   <?php
   $api_key = 'your-openai-api-key-here';
   ?>
   ```

3. **Run locally:**

   If you're using PHP's built-in server:

   ```bash
   php -S localhost:8000
   ```

   Then open your browser and go to `http://localhost:8000`.

---

## 🛠 How to Customize

Want to build a different tool? Just tweak this line in `index.php`:

```php
$content = "Please correct grammar, but don't omit or rewrite anything: ".$keywords;
```

Replace it with your own prompt like:

- "Summarize this:"
- "Translate this to Spanish:"
- "Make this sound more professional:"
- "Convert this to JavaScript code:"

---

## 🧐 Powered by

- [OpenAI API](https://platform.openai.com/docs/introduction)

---

## 📄 License

MIT – use it freely, modify it however you like.

---

## 🙌 Contributions Welcome

Found this useful? Star it ⭐, fork it 🍝, or contribute with your own examples!

