<h2>LED Настенно-потолочные</h2>

<?php include $this->nav ?>

<table id="<?php echo $this->view ?>" class="table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th class="title w10">Мощность, Вт</th>
      <th class="title w10">Спектр, К</th>
      <th colspan="3" class="title">MAXUS</th>
      <th colspan="3" class="title">VIDEX</th>
      <th colspan="3" class="title">GLOBAL</th>
      <th colspan="3" class="title">LEBRON</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach ($this->data as $key => $value): ?>

      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data[$key+1]['param1']){echo 'class="bordered"';} ?>>

        <td field="param1" class="b-red black title"><?php echo $this->replace($value['param1']) ?></td>
        <td field="param2" class="b-green black title"><?php echo $value['param2'] ?></td>

        <td field="name1" class="b-yellow name"><?php echo $value['name1'] ?></td>
        <td class="b-yellow qty"><?php $this->get($value['sku1']); ?></td>
        <td field="sku1" class="b-yellow sku"><?php echo $value['sku1'] ?></td>

        <td field="name2" class="b-blue name"><?php echo $value['name2'] ?></td>
        <td class="b-blue qty"><?php $this->get($value['sku2']); ?></td>
        <td field="sku2" class="b-blue sku"><?php echo $value['sku2'] ?></td>

        <td field="name3" class="b-purpur name"><?php echo $value['name3'] ?></td>
        <td class="b-purpur qty"><?php $this->get($value['sku3']); ?></td>
        <td field="sku3" class="b-purpur sku"><?php echo $value['sku3'] ?></td>

        <td field="name4" class="b-sea name"><?php echo $value['name4'] ?></td>
        <td class="b-sea qty"><?php $this->get($value['sku4']); ?></td>
        <td field="sku4" class="b-sea sku"><?php echo $value['sku4'] ?></td>

      </tr>
    <?php endforeach; ?>
  </tbody>
</table>