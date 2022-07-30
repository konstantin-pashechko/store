<h2>КВАДРАТ (IP20)</h2>
<table id="<?php echo $this->view ?>_nakl" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="11" class="center st">Накладной</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" class="center black bal bb bg-white">Параметры</th>
      <th colspan="3" class="center black bal bb">LEBRON</th>
      <th colspan="3" class="center black bal bb">VIDEX</th>
      <th colspan="3" class="center black bal bb">MAXUS</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($this->data['nakl'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data['nakl'][$key+1]['param1']){echo 'class="bordered"';} ?>>
        <td field="param1" class="option b-red"><val><?php echo $value['param1']; ?></val> w</td>
        <td field="param2" class="option b-red"><val><?php echo $value['param2']; ?></val> K</td>

        <td field="sku2" class="sku"><?php echo $value['sku2']; ?></td>      
        <td field="name2" class="option"><?php echo $value['name2']; ?></td>
        <td class="qty"><?php $this->get($value['sku2']) ?></td>

        <td field="sku3" class="sku"><?php echo $value['sku3']; ?></td>
        <td field="name3" class="option"><?php echo $value['name3']; ?></td>
        <td class="qty"><?php $this->get($value['sku3']) ?></td>

        <td field="sku4" class="sku"><?php echo $value['sku4']; ?></td>
        <td field="name4" class="option"><?php echo $value['name4']; ?></td> 
        <td class="qty"><?php $this->get($value['sku4']) ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<!--   888888888888    -->

<table id="<?php echo $this->view ?>_vstr" class="tl-fixed table table-dark table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th colspan="11" class="center st">Встраиваемый</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" class="center black bal bb bg-white">Параметры</th>
      <th colspan="3" class="center black bal bb">LEBRON</th>
      <th colspan="3" class="center black bal bb">VIDEX</th>
      <th colspan="3" class="center black bal bb">MAXUS</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($this->data['vstr'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] !== $this->data['vstr'][$key+1]['param1']){echo 'class="bordered"';} ?>>
        <td field="param1" class="b-red option"><val><?php echo $value['param1']; ?></val> w</td>
        <td field="param2" class="b-red option"><val><?php echo $value['param2']; ?></val> K</td>

        <td field="sku2" class="sku"><?php echo $value['sku2']; ?></td>      
        <td field="name2" class="option"><?php echo $value['name2']; ?></td>
        <td class="qty"><?php $this->get($value['sku2']) ?></td>

        <td field="sku3" class="sku"><?php echo $value['sku3']; ?></td>
        <td field="name3" class="option"><?php echo $value['name3']; ?></td>
        <td class="qty"><?php $this->get($value['sku3']) ?></td>
        
        <td field="sku4" class="sku"><?php echo $value['sku4']; ?></td>
        <td field="name4" class="option"><?php echo $value['name4']; ?></td> 
        <td class="qty"><?php $this->get($value['sku4']) ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


