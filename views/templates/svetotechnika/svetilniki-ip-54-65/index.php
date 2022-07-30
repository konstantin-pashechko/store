<h2>LED Настенно-потолочные (ЖКХ)</h2>
<table id="<?php echo $this->view ?>_krug54" class="tl-fixed table table-dark table-striped table-bordered table-sm tbordered">
  <thead>
    <tr>
      <th colspan="22" class="title white">КРУГ IP54</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" class="b-white black name">Параметры</th> 
      <th colspan="4" bgcolor="#F0E68C" class="center black bal">Евросвет</th>
      <th colspan="4" class="center black bal">Lebron</th>
      <th colspan="4" class="center black bal">Videx</th>
      <th colspan="4" class="center black bal">Global</th>
      <th colspan="4" class="center black bal">ETRON</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($this->data['krug54'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] < $this->data[0][$key+1]['param1']){echo 'class="bordered"';} ?>>

        <td field="param1" class="title"><val><?php echo $value['param1'] ?></val> w</td>      
        <td field="param3" class="name"><val><?php echo $value['param3'] ?></val> K</td>

        <td field="sku1" class="sku"><?php echo $value['sku1'] ?></td>
        <td colspan="2" field="name1" class="name"><?php echo $value['name1'] ?></td>
        <td class="qty"><?php $this->get($value['sku1']) ?></td>

        <td field="sku2" class="sku"><?php echo $value['sku2'] ?></td>
        <td colspan="2" field="name2" class="name"><?php echo $value['name2'] ?></td>
        <td class="qty"><?php $this->get($value['sku2']) ?></td>

        <td field="sku3" class="sku"><?php echo $value['sku3'] ?></td>
        <td colspan="2" field="name3" class="name"><?php echo $value['name3'] ?></td>
        <td class="qty"><?php $this->get($value['sku3']) ?></td>

        <td field="sku4" class="sku"><?php echo $value['sku4'] ?></td>
        <td colspan="2" field="name4" class="name"><?php echo $value['name4'] ?></td>
        <td class="qty"><?php $this->get($value['sku4']) ?></td>

        <td field="sku5" class="sku"><?php echo $value['sku5'] ?></td>
        <td colspan="2" field="name5" class="name"><?php echo $value['name5'] ?></td>
        <td class="qty"><?php $this->get($value['sku5']) ?></td>

      </tr>
    <?php endforeach; ?>

  </tbody>
</table>


<table id="<?php echo $this->view ?>_krug65" class="tl-fixed table table-dark table-striped table-bordered table-sm tbordered">
  <thead>
    <tr>
      <th colspan="22" class="title white">КРУГ IP65</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" class="b-white black name">Параметры</th> 
      <th colspan="4" bgcolor="#F0E68C" class="center black bal">Евросвет</th>
      <th colspan="4" class="center black bal">Lebron</th>
      <th colspan="4" class="center black bal">Videx</th>
      <th colspan="4" class="center black bal">Global</th>
      <th colspan="4" class="center black bal">ETRON</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($this->data['krug65'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] < $this->data[1][$key+1]['param1']){echo 'class="bordered"';} ?>>

        <td field="param1" class="title"><val><?php echo $value['param1'] ?></val> w</td>      
        <td field="param3" class="name"><val><?php echo $value['param3'] ?></val> K</td>

        <td field="sku1" class="sku"><?php echo $value['sku1'] ?></td>
        <td colspan="2" field="name1" class="name"><?php echo $value['name1'] ?></td>
        <td class="qty"><?php $this->get($value['sku1']) ?></td>

        <td field="sku2" class="sku"><?php echo $value['sku2'] ?></td>
        <td colspan="2" field="name2" class="name"><?php echo $value['name2'] ?></td>
        <td class="qty"><?php $this->get($value['sku2']) ?></td>

        <td field="sku3" class="sku"><?php echo $value['sku3'] ?></td>
        <td colspan="2" field="name3" class="name"><?php echo $value['name3'] ?></td>
        <td class="qty"><?php $this->get($value['sku3']) ?></td>

        <td field="sku4" class="sku"><?php echo $value['sku4'] ?></td>
        <td colspan="2" field="name4" class="name"><?php echo $value['name4'] ?></td>
        <td class="qty"><?php $this->get($value['sku4']) ?></td>

        <td field="sku5" class="sku"><?php echo $value['sku5'] ?></td>
        <td colspan="2" field="name5" class="name"><?php echo $value['name5'] ?></td>
        <td class="qty"><?php $this->get($value['sku5']) ?></td>        

      </tr>
    <?php endforeach; ?>

  </tbody>
</table>

<table id="<?php echo $this->view ?>_oval54" class="tl-fixed table table-dark table-striped table-bordered table-sm tbordered">
  <thead>
    <tr>
      <th colspan="22" class="title white">Овал IP54</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" class="b-white black name">Параметры</th> 
      <th colspan="4" bgcolor="#F0E68C" class="center black bal">Евросвет</th>
      <th colspan="4" class="center black bal">Lebron</th>
      <th colspan="4" class="center black bal">Videx</th>
      <th colspan="4" class="center black bal">Global</th>
      <th colspan="4" class="center black bal">ETRON</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($this->data['oval54'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] < $this->data[2][$key+1]['param1']){echo 'class="bordered"';} ?>>

        <td field="param1" class="title"><val><?php echo $value['param1'] ?></val> w</td>      
        <td field="param3" class="name"><val><?php echo $value['param3'] ?></val> K</td>

        <td field="sku1" class="sku"><?php echo $value['sku1'] ?></td>
        <td colspan="2" field="name1" class="name"><?php echo $value['name1'] ?></td>
        <td class="qty"><?php $this->get($value['sku1']) ?></td>

        <td field="sku2" class="sku"><?php echo $value['sku2'] ?></td>
        <td colspan="2" field="name2" class="name"><?php echo $value['name2'] ?></td>
        <td class="qty"><?php $this->get($value['sku2']) ?></td>

        <td field="sku3" class="sku"><?php echo $value['sku3'] ?></td>
        <td colspan="2" field="name3" class="name"><?php echo $value['name3'] ?></td>
        <td class="qty"><?php $this->get($value['sku3']) ?></td>

        <td field="sku4" class="sku"><?php echo $value['sku4'] ?></td>
        <td colspan="2" field="name4" class="name"><?php echo $value['name4'] ?></td>
        <td class="qty"><?php $this->get($value['sku4']) ?></td>

        <td field="sku5" class="sku"><?php echo $value['sku5'] ?></td>
        <td colspan="2" field="name5" class="name"><?php echo $value['name5'] ?></td>
        <td class="qty"><?php $this->get($value['sku5']) ?></td>        

      </tr>
    <?php endforeach; ?>

  </tbody>
</table>

<table id="<?php echo $this->view ?>_oval65" class="tl-fixed table table-dark table-striped table-bordered table-sm tbordered">
  <thead>
    <tr>
      <th colspan="22" class="title white">Овал IP65</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" class="b-white black name">Параметры</th> 
      <th colspan="4" bgcolor="#F0E68C" class="center black bal">Евросвет</th>
      <th colspan="4" class="center black bal">Lebron</th>
      <th colspan="4" class="center black bal">Videx</th>
      <th colspan="4" class="center black bal">Global</th>
      <th colspan="4" class="center black bal">ETRON</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($this->data['oval65'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] < $this->data[3][$key+1]['param1']){echo 'class="bordered"';} ?>>

        <td field="param1" class="title"><val><?php echo $value['param1'] ?></val> w</td>      
        <td field="param3" class="name"><val><?php echo $value['param3'] ?></val> K</td>

        <td field="sku1" class="sku"><?php echo $value['sku1'] ?></td>
        <td colspan="2" field="name1" class="name"><?php echo $value['name1'] ?></td>
        <td class="qty"><?php $this->get($value['sku1']) ?></td>

        <td field="sku2" class="sku"><?php echo $value['sku2'] ?></td>
        <td colspan="2" field="name2" class="name"><?php echo $value['name2'] ?></td>
        <td class="qty"><?php $this->get($value['sku2']) ?></td>

        <td field="sku3" class="sku"><?php echo $value['sku3'] ?></td>
        <td colspan="2" field="name3" class="name"><?php echo $value['name3'] ?></td>
        <td class="qty"><?php $this->get($value['sku3']) ?></td>

        <td field="sku4" class="sku"><?php echo $value['sku4'] ?></td>
        <td colspan="2" field="name4" class="name"><?php echo $value['name4'] ?></td>
        <td class="qty"><?php $this->get($value['sku4']) ?></td>

        <td field="sku5" class="sku"><?php echo $value['sku5'] ?></td>
        <td colspan="2" field="name5" class="name"><?php echo $value['name5'] ?></td>
        <td class="qty"><?php $this->get($value['sku5']) ?></td>        

      </tr>
    <?php endforeach; ?>

  </tbody>
</table>

<table id="<?php echo $this->view ?>_kvadrat65" class="tl-fixed table table-dark table-striped table-bordered table-sm tbordered">
  <thead>
    <tr>
      <th colspan="22" class="title white">Квадрат IP65</th>
    </tr>
    <tr class="bordered">
      <th colspan="2" class="b-white black name">Параметры</th> 
      <th colspan="4" bgcolor="#F0E68C" class="center black bal">Евросвет</th>
      <th colspan="4" class="center black bal">Lebron</th>
      <th colspan="4" class="center black bal">Videx</th>
      <th colspan="4" class="center black bal">Global</th>
      <th colspan="4" class="center black bal">ETRON</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($this->data['kvadrat65'] as $key => $value): ?>
      <tr id="<?php echo $value['id'];?>"<?php if($value['param1'] < $this->data[4][$key+1]['param1']){echo 'class="bordered"';} ?>>

        <td field="param1" class="title"><val><?php echo $value['param1'] ?></val> w</td>      
        <td field="param3" class="name"><val><?php echo $value['param3'] ?></val> K</td>

        <td field="sku1" class="sku"><?php echo $value['sku1'] ?></td>
        <td colspan="2" field="name1" class="name"><?php echo $value['name1'] ?></td>
        <td class="qty"><?php $this->get($value['sku1']) ?></td>

        <td field="sku2" class="sku"><?php echo $value['sku2'] ?></td>
        <td colspan="2" field="name2" class="name"><?php echo $value['name2'] ?></td>
        <td class="qty"><?php $this->get($value['sku2']) ?></td>

        <td field="sku3" class="sku"><?php echo $value['sku3'] ?></td>
        <td colspan="2" field="name3" class="name"><?php echo $value['name3'] ?></td>
        <td class="qty"><?php $this->get($value['sku3']) ?></td>

        <td field="sku4" class="sku"><?php echo $value['sku4'] ?></td>
        <td colspan="2" field="name4" class="name"><?php echo $value['name4'] ?></td>
        <td class="qty"><?php $this->get($value['sku4']) ?></td>

        <td field="sku5" class="sku"><?php echo $value['sku5'] ?></td>
        <td colspan="2" field="name5" class="name"><?php echo $value['name5'] ?></td>
        <td class="qty"><?php $this->get($value['sku5']) ?></td>        

      </tr>
    <?php endforeach; ?>

  </tbody>
</table>