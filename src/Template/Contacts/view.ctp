<?php echo $this->Html->script(["//cdn.tinymce.com/4/tinymce.min.js"]);?>
<div class="bookmarks view large-10 medium-9 columns content">
    <h3><?= h($contacts->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contacts->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contacts->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($contacts->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Messages') ?></th>
            
            <td><?php echo $this->Form->input('',['type' => 'textarea','value'=>$contacts->messages]);?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Package') ?></th>
            <td><?= $this->Html->link($contacts->package->package_name, ['controller' => 'packages', 'action' => 'view', $contacts->package->id]) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Budget') ?></th>
            <td><?= h($contacts->package->budget) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flights') ?></th>
            <td><?php 
                        if($contacts->package->flights==1){
                            if($contacts->package->flight_on=='D'){
                                echo "Domestic";
                            }else{
                                echo "International";
                            }
                        }else{
                            echo "No";
                        }
                    ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotels') ?></th>
            <td><?php 
                        if($contacts->package->hotels==1){
                            if(!empty($contacts->package->star)){
                                echo $contacts->package->star.'-Star';
                            }else{
                                echo "Star";
                            }
                        }else{
                            echo "No";
                        }
                    ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transfers') ?></th>
            <td>
                <?php 
                    if($contacts->package->transfers==1){
                        echo "Yes";
                    }else{
                        echo "No";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meals') ?></th>
            <td>
                <?php 
                    if($contacts->package->meals==1){
                        echo "Yes";
                    }else{
                        echo "No";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sight Seeings') ?></th>
            <td>
                <?php 
                    if($contacts->package->sight_seeings==1){
                        echo "Yes";
                    }else{
                        echo "No";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Days') ?></th>
            <td><?= h($contacts->package->days) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nights') ?></th>
            <td><?= h($contacts->package->nights) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contacts->package->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contacts->package->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Package Description') ?></th>
            <td><?php echo $this->Form->input('',['type' => 'textarea','value'=>$contacts->package->package_description]);?></td>

        </tr>
    </table>
</div>
<script type="text/javascript">
    tinymce.init({ selector:'textarea',
                          theme: 'modern'
                          
                     });
</script>