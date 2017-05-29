{{I2 head}} 
{{I2 innolab home}}

<html>
<script>
    // menu horizontal
    (function (window, document) {
        document.getElementById('toggle').addEventListener('click', function (e) {
            document.getElementById('tuckedMenu').classList.toggle('custom-menu-tucked');
            document.getElementById('toggle').classList.toggle('x');
        });
    })(this, this.document);
</script>
<script language="javascript">
    if (_checkbox.addEventListener) {
        _checkbox.addEventListener("click", setCheckedValues, false);
    } else {
        _checkbox.attachEvent("onclick", setCheckedValues);
    }
</script>

</html>