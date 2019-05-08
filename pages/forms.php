<!DOCTYPE html>
<html>
  <head>
    <?php include('../includes/_head.php') ?>
    <link rel="stylesheet" href="../css/forms.css">
  </head>
  <body>
    <?php include('../includes/_header.php') ?>
    <main class="main-content">
      <section class="main-content__section form-section form-section--simple">
        <h3>Simple Form</h3>

        <form action="">
          <p class="text">
            最ユ基国よま違組えトく事促ホケセ博改特よ達質ぎのった張霊よいく治以体よー政月ワ咲実ヘ権赤冒ょけクを。今レ白聞マ就県費リそょ立9包たみば礎級ト転棚コ額情ほれスろ百見サロスミ電63落めのさ育鼻官ぼ。治こじぱえ聞講付はイ発置退シウア化古力ナヨテム者夜ユクヤテ徒警セ名72定ほえし北教じろげス上未ト相52自喚がゃ。
          </p>
          <div class="form-row">
            <label class="label" for="simple-input-1">メールアドレス</label>
            <input type="email" class="input" id="simple-input-1">
          </div>

          <div class="form-row">
            <label class="label" for="simple-input-2">パスワード</label>
            <input type="password" class="input" id="simple-input-2">
          </div>

          <div class="form-row">
            <input class="button" type="submit" value="サインイン">
          </div>
        </form>
      </section>

      <section class="main-content__section form-section form-section--simple">
        <h3>Complex Form</h3>

        <form action="">
          <div class="form-row">
            <label class="label" for="simple-input-3">メールアドレス</label>
            <input type="email" class="input" id="simple-input-3">
          </div>

          <div class="form-row">
            <label class="label" for="simple-input-4">パスワード</label>
            <input type="password" class="input" id="simple-input-4">
          </div>

          <div class="form-row">
            <label class="label" for="simple-input-5">倒ケ間</label>
            <input type="text" class="input" id="simple-input-5">
          </div>

          <div class="form-row">
            <label class="label" for="simple-select-1">関オ読28紙に</label>
            <div class="select">
              <select class="select-list" name="simple-select-1" id="simple-select-1">
                <option value="option-1">オプシオン１</option>
                <option value="option-2">オプシオン２</option>
                <option value="option-3">オプシオン３</option>
              </select>
            </div>
          </div>

          <p class="text" style="margin: 32px 0 16px;">授ウホマワ理弓業ル済路ゆ勝2振いぴ販垣イ原月通エリヱ立薬部かつきあ岩校キラクロ薦集げばへ田時ばれはず沈高ごめスぶ保千の耳政締懐蓄壌粉へ。</p>
          <div class="form-row">
            <label class="label" for="radio1">授ウホマワ</label>
            <input id="radio1" class="radio" name="radio" type="radio" checked="checked">
          </div>
          <div class="form-row">
            <label class="label" for="radio2">経ミレ決</label>
            <input id="radio2" class="radio" name="radio" type="radio">
          </div>
          <div class="form-row">
            <label class="label" for="radio3">衣津ヱ山軍すん</label>
            <input id="radio3" class="radio" name="radio" type="radio">
          </div>

          <p class="text" style="margin: 32px 0 16px;">経ミレ決7藤じへぴ要齢ン家記ニスケ名悟59定ほこよド見葉わ述土前ロウ覧願づでごぞ集5窮おわら形検学ぴぎずみ公楽ハ辛通性柏沼きう。</p>
          <div class="form-row">
            <label class="label" for="checkbox1">機井る</label>
            <input id="checkbox1" type="checkbox" class="checkbox">
          </div>
          <div class="form-row">
            <label class="label" for="checkbox2">トセニス</label>
            <input id="checkbox2" type="checkbox" class="checkbox">
          </div>
          <div class="form-row">
            <label class="label" for="checkbox2">薄ばゆっ将9然て</label>
            <input id="checkbox2" type="checkbox" class="checkbox">
          </div>

          <div class="form-row">
            <label class="label" for="textarea">数キ格2国</label>
            <textarea class="textarea"></textarea>
          </div>

          <div class="form-row">
            <label class="label" for="textarea">数キ格2国</label>
            <input type="file" class="file">
          </div>

          <div class="form-row">
            <input class="button" type="submit" value="サインイン">
          </div>
        </form>
      </section>
    </main>
    <?php include('../includes/_footer.php') ?>
  </body>
</html>
