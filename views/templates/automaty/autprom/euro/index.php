<?php include $this->nav; ?>
<div class="wrapper">
  <div class="box">
    <table id="<?php echo $this->view ?>_iek" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th scope="col" colspan="4" >IEK</th>
        </tr>
        <tr class="bordered">
          <th class="b-red black">Модель</th>
          <th class="b-green black">А</th>
          <th class="b-yellow black">арт</th>
          <th class="b-blue black">кол-во</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($this->data['iek'] as $key => $value): ?>
          
          <tr id="<?php echo $value['id']; ?>" <?php if($value['param1'] !== $this->data['iek'][$key+1]['param1']){echo 'class="bordered"';} ?>>
   
            <td field="param1" class="b-red">ВА 88-<val><?php echo $value['param1']; ?></val></td>
            <td field="param3" class="b-green"><?php echo $value['param3']; ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1']; ?></td>
            <td class="b-blue"><?php $this->get($value['sku1']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <div class="box">
    <table id="<?php echo $this->view ?>_enext" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th scope="col" colspan="6" >E.NEXT</th>
        </tr>
        <tr class="bordered">
          <th class="b-red black">Модель</th>
          <th class="b-green black">А</th>
          <th class="b-yellow black" colspan="2">S</th>
          <th class="b-blue black" colspan="2">SM</th>        
        </tr>        
      </thead>
      <tbody>
        <?php foreach ($this->data['enext'] as $key => $value): ?>
          
          <tr id="<?php echo $value['id']; ?>" <?php if($value['param1'] !== $this->data['enext'][$key+1]['param1']){echo 'class="bordered"';} ?>>
            <td field="param1" class="b-red">UKM.<val><?php echo $value['param1']; ?></val></td>
            <td field="param3" class="b-green"><?php echo $value['param3']; ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1']; ?></td>
            <td class="b-yellow"><?php $this->get($value['sku1']); ?></td>
            <td field="sku2" class="b-blue sku"><?php echo $value['sku2']; ?></td>
            <td class="b-blue"><?php $this->get($value['sku2']); ?></td>            
          </tr>
        <?php endforeach; ?>             
      </tbody>
    </table>
  </div>
  <div class="box">
    <table id="<?php echo $this->view ?>_schneider" class="tl-fixed table table-dark table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th scope="col" colspan="4" >Schneider</th> 
        </tr>
        <tr class="bordered">
          <th class="b-red black">Габарит</th>
          <th class="b-green black">А</th>
          <th class="b-yellow black">Арт.</th>
          <th class="b-blue black">кол-во</th>
        </tr>         
      </thead>
      <tbody>
        <?php foreach ($this->data['schneider'] as $key => $value): ?>
          
          <tr id="<?php echo $value['id']; ?>" <?php if($value['param1'] !== $this->data['schneider'][$key+1]['param1']){echo 'class="bordered"';} ?>>  
            <td field="param1" class="b-red">EZC <val><?php echo $value['param1']; ?></val> N</td>
            <td field="param3" class="b-green"><?php echo $value['param3']; ?></td>
            <td field="sku1" class="b-yellow sku"><?php echo $value['sku1']; ?></td>
            <td class="b-blue"><?php $this->get($value['sku1']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>    
  </div>
</div>