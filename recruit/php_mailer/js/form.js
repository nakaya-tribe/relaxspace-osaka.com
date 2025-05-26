import { validation } from "./validation.js";

validation();

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("the-form");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    // フォームの入力値を取得
    const formData = new FormData(form);
    const formDataObj = Object.fromEntries(formData.entries());

    if (document.querySelector("span.error")) {
      document.getElementById("form-load").style.display = "none";
    } else {
      // フォームの入力内容をfetch APIで送信
      const submitButton = document.getElementById("submit");
      const formLoad = document.getElementById("form-load");
      const result = document.getElementById("result");

      // ボタンを非活性化
      submitButton.disabled = true;
      formLoad.style.display = "block";

      // reCAPTCHAの処理を追加
      grecaptcha.ready(function () {
        grecaptcha
          .execute("6Ld1BT4kAAAAAKgrkcfnuJvMK2lwQZUt4CqJnbkv", {
            action: "submit",
          })
          .then(function (token) {
            formData.append("recaptchaToken", token);

            fetch("php_mailer/send.php", {
              method: "POST",
              body: formData,
              timeout: 40000,
            })
              .then((response) => response.text())
              .then((data) => {
                formLoad.style.display = "none";
                form.style.display = "none";
                form.reset();
                result.innerHTML = data;
              })
              .catch((error) => {
                formLoad.style.display = "none";
                result.textContent = "送信できませんでした";
              })
              .finally(() => {
                submitButton.disabled = false;
              });
          })
          .catch((error) => {
            formLoad.style.display = "none";
            submitButton.disabled = false;
            result.textContent = "reCAPTCHAの検証に失敗しました";
          });
      });
    }
  });
});
