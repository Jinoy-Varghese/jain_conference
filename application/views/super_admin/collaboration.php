<br>
<br>
<br>
<?php

    if($this->session->flashdata('update_success')){
        echo '
       <div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Success!</strong> Content Updated.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';
       }
       if($this->session->flashdata('update_failed')){
           echo '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failed!</strong> Something Wend wrong, please try again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }


    $this->db->select('*');
    $this->db->from('contents');
    $this->db->where('id','5');
    $sql=$this->db->get();
    foreach($sql->result() as $data)
    {
    ?>
    

<form class=""  method="post" action="<?php echo base_url("Super_admin/update_content_process");?>">

<input type="hidden" name="id" value="5">
<input type="text" name="head" id="name" class="heading" value="<?php echo $data->heading; ?>"> 
<br>
<br>
<p> 
<textarea name="para">
<?php echo $data->paras; ?>
</textarea>
</p>
<input class="btn btn-primary ml-1" type="submit" name="update_cont" value="Save">
</form>
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
