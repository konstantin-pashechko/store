  <table id="<?= $this->view; ?>" class="tl-fixed table table-dark table-striped table-bordered table-sm">
    <thead>
      <tr>
        <th colspan="17" class="title">Контакторы миниатюрные <h5>220В</h5></th>
      </tr>
      <tr class="bordered">
        <th class="b-red black title">Ток, А</th>
        <th colspan="2" class="b-green black title">Силовые</th>
        <th colspan="2" class="b-green black title">Дополнительные</th>
        <th colspan="4" class="b-blue black title">Schneider</th>
        <th colspan="4" class="b-yellow black title">ETI</th>
        <th colspan="4" class="b-purpur black title">АСКО</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->data as $key => $value): ?>
        <tr id="<?php echo $value['id'];?>" <? if($value['param1'] !== $this->data[$key+1]['param1']){ echo 'class="bordered"'; } ?>>
          <td field="param1" class="b-red title black"><?php echo $value['param1'] ?></td>
          <td colspan="2" field="param2" class="b-green option"><?php echo $value['param2']; ?></td>
          <td colspan="2" field="param4" class="b-green option"><?php echo $value['param4']; ?></td>

          <td colspan="2" field="name1" class="b-blue name"><?php echo $value['name1']; ?></td></td>
          <td field="sku1" class="b-blue sku"><?php echo $value['sku1']; ?></td></td>
          <td class="b-blue qty"><?php $this->get($value['sku1']); ?></td>

          <td colspan="2" field="name2" class="b-yellow name"><?php echo $value['name2']; ?></td></td>
          <td field="sku2" class="b-yellow sku"><?php echo $value['sku2']; ?></td></td>
          <td class="b-yellow qty"><?php $this->get($value['sku2']); ?></td>

          <td colspan="2" field="name3" class="b-purpur name"><?php echo $value['name3']; ?></td></td>
          <td field="sku3" class="b-purpur sku"><?php echo $value['sku3']; ?></td></td>
          <td class="b-purpur qty"><?php $this->get($value['sku3']); ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>