<?php $this->load->view('head') ?>
<div class="container">
    <h1 align="center">Edit Data Bus</h1>
    <?php foreach ($bus as $u){?>
    <form action="<?php echo base_url() . 'index.php/bus/update'?>" method="post">
    <div class="form-group">
            <label for="exampleInputEmail1">Nama Travel</label>
            <input type="hidden" name="id" value="<?php echo $u->id_bus ?>">
            <input type="text" name="1" class="form-control" value="<?php echo $u->nama ?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Berangkat</label>
            <input type="date" name="2" class="form-control" value="<?php echo $u->tanggal ?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jam Berangkat</label>
            <input type="text" name="3" class="form-control" value="<?php echo $u->jam ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Harga</label>
            <input type="text" name="4" class="form-control" value="<?php echo $u->harga ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kota Keberangkatan</label>
            <select name="5" id="" class="form-control">
            <option value="<?php echo $u->id_kberangkat ?>"><?php echo $u->kota_berangkat ?></option>
            <?php
              foreach($awe as $row)
              {
              echo '<option value="'.$row->id_kberangkat.'">'.$row->kota_berangkat.'</option>';
              }
              ?>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kota Tujuan</label>
            <select name="6" id="" class="form-control">
                <option value="<?php echo $u->id_tujuan ?>"><?php echo $u->kota_tujuan ?></option>
            <?php
              foreach($awe2 as $row)
              {
              echo '<option value="'.$row->id_tujuan.'">'.$row->kota_tujuan.'</option>';
              }
              ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tempat Keberangkatan</label>
            <input type="text" name="7" class="form-control" value="<?php echo $u->tempat ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php } $this->load->view('footer') ?>