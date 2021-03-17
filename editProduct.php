<?php 

if(isset($_POST['butoni12'])){
    header("Location:editProduct.php");
}

?>


<form id="formaProduktit" method ="POST" action="valProducts.php" >
                <h3>Shto Produkt</h3>
                    <p></p>
                    <input type="text" id="pName"  size="15" placeholder="Emri Produktit" name="emri" > 
                    <p></p>
                    <textarea id="pershkrimi" name="pershkrimiProduktit" id="pPershkrimi" placeholder="Pershkrimi"  rows="4" cols="40"></textarea>
                    <p></p>
                    <input type="number" min="0" name="qmimiProduktit" max="10000"  id="pQmimi" placeholder="Qmimi"> 
                    <p></p>
    
                    <label> Shto Foto
                    <input type="file" name="fotoProduktit" id="fotoP"  accept="image/*" >
                    </label> 
                    <input type="submit" id="butonP" name="submit" value="Update">
                </form>