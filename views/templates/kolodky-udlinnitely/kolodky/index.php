<?php $this->nav() ?>

<div class="box5">
  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="15" class="title">Колодки для удлиннителей</th>
      </tr>
      <tr class="bordered">
        <th colspan="3" class="b-yellow black title">ТИП</th>
        <th colspan="4" class="b-green black title">VIKO</th>
        <th colspan="4" class="b-purpur black title">Mutlusan</th>
        <th colspan="4" class="b-grey black title">FAR / Fetih</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td colspan="3" field="param2" class="b-yellow name"><?php echo $value['param2'] ?></td>

          <td colspan="2" field="name1" class="b-green name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-green sku"><?php echo $value['sku1'] ?></td>
          <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>

          <td colspan="2" field="name2" class="b-purpur name"><?php echo $value['name2'] ?></td>
          <td field="sku2" class="b-purpur sku"><?php echo $value['sku2'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku2']) ?></td>

          <td colspan="2" field="name3" class="b-grey name"><?php echo $value['name3'] ?></td>
          <td field="sku3" class="b-grey sku"><?php echo $value['sku3'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku3']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
