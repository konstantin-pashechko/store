  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="38" class="b-dark title red">НАСТОЛЬНЫЕ ЛАМПЫ</th>
      </tr>
      <tr class="bordered">
        <th colspan="2" class="b-red black title">Мощность</th>

        <th colspan="6" class="b-green black title">VIDEX</th>
        <th colspan="6" class="b-yellow black title">DELUX</th>
        <th colspan="6" class="b-blue black title">MAXUS</th>
        <th colspan="6" class="b-grey black title">LEBRON</th>
        <th colspan="6" class="b-purpur black title">GLOBAL</th>
        <th colspan="6" class="b-sea black title">ЕВРОСВЕТ</th>
      </tr>
    </thead>
    <tbody>     
      <?php foreach ($this->data as $key => $value): ?>
        <?php if($value['param1']==false && !$_SESSION['edit']){ continue; } ?>
        <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] < $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>
          <td colspan="2" field="param1" class="b-red option"><val><?php echo $value['param1'] ?></val> Вт</td>

          <td colspan="4" field="name1" class="b-green name"><?php echo $value['name1'] ?></td>
          <td field="sku1" class="b-green sku"><?php echo $value['sku1'] ?></td>
          <td class="b-green qty"><?php $this->get($value['sku1']) ?></td>

          <td colspan="4" field="name2" class="b-yellow name"><?php echo $value['name2'] ?></td>
          <td field="sku2" class="b-yellow sku"><?php echo $value['sku2'] ?></td>
          <td class="b-yellow qty"><?php $this->get($value['sku2']) ?></td>

          <td colspan="4" field="name3" class="b-blue name"><?php echo $value['name3'] ?></td>
          <td field="sku3" class="b-blue sku"><?php echo $value['sku3'] ?></td>
          <td class="b-blue qty"><?php $this->get($value['sku3']) ?></td>

          <td colspan="4" field="name4" class="b-grey name"><?php echo $value['name4'] ?></td>
          <td field="sku4" class="b-grey sku"><?php echo $value['sku4'] ?></td>
          <td class="b-grey qty"><?php $this->get($value['sku4']) ?></td>

          <td colspan="4" field="name5" class="b-purpur name"><?php echo $value['name5'] ?></td>
          <td field="sku5" class="b-purpur sku"><?php echo $value['sku5'] ?></td>
          <td class="b-purpur qty"><?php $this->get($value['sku5']) ?></td>

          <td colspan="4" field="name6" class="b-sea name"><?php echo $value['name6'] ?></td>
          <td field="sku6" class="b-sea sku"><?php echo $value['sku6'] ?></td>
          <td class="b-sea qty"><?php $this->get($value['sku6']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>