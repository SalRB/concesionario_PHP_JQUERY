<div id="contenido">
    <form autocomplete="on" method="post" name="delete_car" id="delete_car" action="index.php?module=cars&op=delete&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>Are you sure you wanna delete the car with plate <?php echo $car['plate']; ?> and color <?php echo $car['color']; ?>?</h3></td>
            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete" id="delete">Aceptar</button></td>
                <td align="center"><a class="Button_red" href="index.php?module=cars&op=list">Cancelar</a></td>
            </tr>
        </table>
    </form>
</div>