export const validation = () => {
  //.validationForm を指定した最初の form 要素を取得
  const validationForm = document.querySelector(".validationForm");
  //.validationForm を指定した form 要素が存在すれば
  if (validationForm) {
    //エラーを表示する span 要素に付与するクラス名（エラー用のクラス）
    const errorClassName = "error";
    const maxlengthElems = document.querySelectorAll(".maxlength");
    const emailElems = document.querySelectorAll(".email");
    const telElems = document.querySelectorAll(".telephone");
    const ageElems = document.querySelectorAll(".age");
    const requiredElems = document.querySelectorAll(".required");
    const checkElems = document.querySelectorAll(".check");
    const selectElems = validationForm.querySelectorAll(".select");
    const radioElems = validationForm.querySelectorAll(".radio");
    const fileElems = validationForm.querySelectorAll(".file");
    const dateElems = validationForm.querySelectorAll(".selectdate");
    const checkradioElems = validationForm.querySelectorAll(".check_radio"); // チェックボックスを用いたラジオボタンの仕組み

    //エラーメッセージを表示する span 要素を生成して親要素に追加する関数
    //elem ：対象の要素
    //errorMessage ：表示するエラーメッセージ
    const createError = (elem, errorMessage) => {
      const errorSpan = document.createElement("span");
      errorSpan.classList.add(errorClassName);
      errorSpan.setAttribute("aria-live", "polite");
      errorSpan.textContent = errorMessage;
      elem.parentNode.appendChild(errorSpan);
    };

    //送信時の処理（form 要素の submit イベント）
    validationForm.addEventListener("submit", (e) => {
      //エラーを表示する要素を全て取得して削除（初期化）
      const errorElems = validationForm.querySelectorAll("." + errorClassName);
      errorElems.forEach((elem) => {
        //エラーを表示する要素を削除
        elem.remove();
      });

      //.maxlength を指定した要素を検証
      maxlengthElems.forEach((elem) => {
        const maxlength = elem.dataset.maxlength;
        if (elem.value !== "") {
          if (elem.value.length > maxlength) {
            createError(elem, maxlength + "文字以内でご入力ください");
          }
        }
      });

      //.email を指定した要素を検証
      emailElems.forEach((elem) => {
        const pattern =
          /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iu;
        if (elem.value !== "") {
          if (!pattern.test(elem.value)) {
            createError(elem, "Email アドレスの形式が正しくないようです。");
          }
        }
      });

      //.telephone を指定した要素を検証
      telElems.forEach((elem) => {
        const pattern =
          /^\(?\d{2,5}\)?[-(\.\s]{0,2}\d{1,4}[-)\.\s]{0,2}\d{3,4}$/;
        if (elem.value !== "") {
          if (!pattern.test(elem.value)) {
            createError(elem, "電話番号の形式が正しくないようです。");
          }
        }
      });

      //.age を指定した要素を検証
      ageElems.forEach((elem) => {
        const pattern = /^\d{2}$/;
        if (elem.value !== "") {
          if (!pattern.test(elem.value)) {
            createError(elem, "年齢の形式が正しくないようです。");
          }
        }
      });

      //.required を指定した要素を検証
      requiredElems.forEach((elem) => {
        //値（value プロパティ）の前後の空白文字を削除
        const elemValue = elem.value.trim();
        //値が空の場合はエラーを表示してフォームの送信を中止
        if (elemValue.length === 0) {
          //その要素が select 要素の場合
          if (elem.tagName === "SELECT") {
            createError(elem, "選択してください");
          } else {
            //その要素が select 要素以外の場合
            createError(elem, "入力は必須です");
          }
        }
      });

      // .select を指定した要素を検証
      selectElems.forEach((elem) => {
        const selectList = elem.querySelectorAll("select");
        selectList.forEach((selectelem) => {
          const value = selectelem.value;
          if (value === "") {
            createError(selectelem, "選択してください");
          }
        });
      });

      // .check を指定した要素を検証
      checkElems.forEach((elem) => {
        const checkedList = elem.querySelectorAll(
          "input[type='checkbox']:checked"
        );
        let checkedCount = 0;
        checkedCount = checkedList.length;
        if (checkedCount === 0) {
          createError(elem, "少なくとも1つを選択してください");
        }
      });

      // .radio を指定した要素を検証
      radioElems.forEach((elem) => {
        const checkedList = elem.querySelectorAll(
          "input[type='radio']:checked"
        );
        let checkedCount = 0;
        checkedCount = checkedList.length;
        if (checkedCount === 0) {
          createError(elem, "少なくとも1つを選択してください");
        }
      });

      // .file を指定した要素を検証
      fileElems.forEach((elem) => {
        const maxFileSize = 1048576 * 8; //アップロードできる最大サイズを指定(1048576=1MB)(8MB)
        const fileList = elem.querySelectorAll("input[type='file']");

        fileList.forEach((fileelem) => {
          if (!fileelem.files[0]) {
            createError(fileelem, "ファイルを選択してください。");
          } else {
            var upload_file = fileelem.files[0].size;
          }
          if (upload_file > maxFileSize) {
            createError(
              fileelem,
              "ファイルサイズが8MB以下の画像を選択してください。"
            );
          }
        });
      });

      // .selectdate を指定した要素を検証
      dateElems.forEach((elem) => {
        let error = "";
        const dateList = elem.querySelectorAll("input[type='date']");
        dateList.forEach((dateelem) => {
          const value = dateelem.value;
          if (value === "") {
            error += "date";
          }
        });

        const selectList = elem.querySelectorAll("select");
        selectList.forEach((selectelem) => {
          const value = selectelem.value;
          if (value === "") {
            error += "time";
          }
          if (error === "date") {
            createError(selectelem, "日付を選んでください。");
          } else if (error === "time") {
            createError(selectelem, "時刻を選んでください。");
          } else if (error === "datetime") {
            createError(selectelem, "日時と時刻を選んでください。");
          }
        });
      });

      // .check_radio を指定した要素を検証
      checkradioElems.forEach((elem) => {
        const checkedList = elem.querySelectorAll(
          "input[type='checkbox']:checked"
        );
        let checkedCount = 0;
        checkedCount = checkedList.length;
        if (checkedCount != 1) {
          createError(elem, "どちらか1つを選択してください");
        }
      });
    });
  }
};
