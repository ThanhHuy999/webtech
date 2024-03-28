<?php
    $editor_data = $_POST[ 'content' ];
    
    pg_connect("host=
    ec2-52-206-14-156.compute-1.amazonaws.com dbname=dd0rh3ee26895h user=ehtzfqtqzxozgn password=b7a63cc9772e6c064149a311258bb0c7f0e74612470b7a2865ca1599130d06ab");

    
    pg_query("INSERT INTO BAI_VIET(TIEU_DE_BAI_VIET, CHUYEN_MUC, ANH_DAI_DIEN, TEN_TAC_GIA) VALUES ($editor_data,'Nen tang tri thuc','abc','Thanh Huy 9');");
    echo("xin chao");
?>