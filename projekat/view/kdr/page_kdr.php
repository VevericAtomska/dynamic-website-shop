<div class="program">
<form name="kdr">
    Kills: <input type="text" name="kill" oninput="this.value = this.value.replace(/[^0-9.]/g, '');">
    <br>
    Death: <input type="text" name="death" oninput="this.value = this.value.replace(/[^0-9.]/g, '');">
    <br>
    Ratio: <input type="text" name="ratio" >
    <br>

    <input type="button" value="Calculate" onclick="calculate()">
</form>
</div>

<script>

    <?= include ( DIR_JS . 'kdr.js'); ?>

</script>

</body>
</html>