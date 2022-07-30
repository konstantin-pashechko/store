<style>
  th {
    border: 1px solid #fff;
  }
</style>
<div class="box" style="
position: fixed;
top: 55px;
height: 100px;
padding-right: 15px;
padding-top: 25px;
background: #fff;
">
<table id="<?php echo $this->view  ?>" class="table table-dark table-striped table-bordered table-sm" style="margin: 0;">
  <thead>
    <tr>
      <th colspan="16" class="title">Реле промежуточное</th>
    </tr>
    <rt>
      <th colspan="4" class="title b-dark green">АСКО</th>
      <th colspan="4" class="title b-dark yellow">E.NEXT</th>
      <th colspan="4" class="title b-dark blue">ИЕК</th>
      <th colspan="4" class="title b-dark purpur">ETI</th>
    </rt>
  </thead>
  </table>
</div>
  <table class="table table-dark table-striped table-bordered table-sm" style="
  margin-top: 80px;
  ">
  <tbody>
    <?php foreach ($this->data as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param2'] !== $this->data[$key+1]['param2']){echo 'class="bordered"';} ?>>
        <!--       <td field="param2"><?php echo $value['param2'] ?></td> -->

        <td colspan="2" field="name1"class="b-green name"><?php echo $value['name1'] ?></td>
        <td field="sku1" class="b-green sku"><?php echo $value['sku1']; ?></td>
        <td class="b-green qty"><?php $this->get($value['sku1']); ?></td>

        <td colspan="2" field="name2"class="b-yellow name"><?php echo $value['name2'] ?></td>
        <td field="sku2" class="b-yellow sku"><?php echo $value['sku2']; ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku2']); ?></td>

        <td colspan="2" field="name3"class="b-blue name"><?php echo $value['name3'] ?></td>
        <td field="sku3" class="b-blue sku"><?php echo $value['sku3']; ?></td>
        <td class="b-blue qty"><?php $this->get($value['sku3']); ?></td>

        <td colspan="2"  field="name4"class="b-purpur name"><?php echo $value['name4'] ?></td>
        <td field="sku4" class="b-purpur sku"><?php echo $value['sku4']; ?></td>
        <td class="b-purpur qty"><?php $this->get($value['sku4']); ?></td>      
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
