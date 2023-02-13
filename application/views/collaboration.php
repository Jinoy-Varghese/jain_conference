<br>
<br>
<br>
<?php


    $this->db->select('*');
    $this->db->from('contents');
    $this->db->where('id','5');
    $sql=$this->db->get();
    foreach($sql->result() as $data)
    {
    ?>
    


<h1 style="color:orange"><?php echo $data->heading; ?></h1>
<br>
<br>
<p> 

<?php echo $data->paras; ?>


</p>

<?php   
    }
?>
<style>
    ::placeholder{
        color: ORANGE;
        font-size: 40px;
        font-style: bold;
    }
    .heading{
        font-size: 30px;
        color: ORANGE;
        border-radius: 10px;
    }
    textarea{
        width: 100%;
        height: 50vh;
        border: 1px solid ORANGE;
        border-radius: 10px;
        padding: 10px;
    }        
</style>