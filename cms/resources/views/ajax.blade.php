ajax用のテストページ

  <div class="jumbotron">
   <fieldset>
        カテゴリー：<select id="select" name="example">
            <option value="テスト">テスト</option>
            <option value="test">test</option>
            <option value="test5">test5</option>
        </select>
        <br>
            <button id="ajax">候補を表示</button>

   <fieldset>
         <label><textArea id=result name="article" rows="5" cols="60"></textArea></label>
    </fieldset>


        <br>
        <br>
    </fieldset>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{secure_asset('/js/ajax.js') }}"></script>


