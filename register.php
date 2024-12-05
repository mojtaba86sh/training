<?php
include("header.html")
?>
<p id="td">ثبت نام</p>
    <form>
        <table id="table">
            <tr>
                <td>نام</td>
                <td><input type="text" id="name" class="td"></td>
            </tr>
            <tr>
                <td>نام خانوادگی</td>
                <td><input type="text" id="namefamily" class="td"></td>
            </tr>
            <tr>
                <td>نام کاربری</td>
                <td><input type="text" id="username" class="td"></td>
            </tr>
            <tr>
                <td>رمز عبور</td>
                <td><input type="password" id="password" class="td"></td>
            </tr>
            <tr>
                <td>تکرار رمز عبور</td>
                <td><input type="password" id="repassword" class="td"></td>
            </tr>
        </table>
    </form>
                    <button onclick="sabt()" class="srb3">ثبت نام</button>

                    <script src="register.js">
       
       </script>
<?php
include("footer.html")
?>