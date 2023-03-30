<section>
    <div class="video-player">
        <iframe src="https://www.youtube.com/embed/IPlnHe9l34E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<?php if (isset($_SESSION ["admin"]) || isset($_SESSION["user"])): ?>
<div class="cart">
    <h3>Shop</h3>
    <form action='' method="post" >
        <ul>
            <li>
                <h2>Standard</h2>
                <p>Price: $10.00</p>
                <label for="standard">Quantity:</label>
                <input type="number" name="standard" id="standard" value="0">
            </li>
            <li>
                <h2>Left Behind</h2>
                <p>Price: $20.00</p>
                <label for="left_behind">Quantity:</label>
                <input type="number" name="left_behind" id="left_behind" value="0">
            </li>
            <li>
                <h2>Edge of Darkness</h2>
                <p>Price: $35.00</p>
                <label for="edge_of_darkness">Quantity:</label>
                <input type="number" name="edge_of_darkness" id="edge_of_darkness" value="0">
            </li>
        </ul>
        <input type="submit"  value="Checkout"  >
    </form>
</div>
<?php endif ?>


</body>
</html>
