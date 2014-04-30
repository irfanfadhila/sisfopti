<?php
/* @var $this HistoryRequestController */

$this->breadcrumbs=array(
	'History Request',
);
$row=0;
Yii::app()->clientScript->registerScript('re-install-date-picker', "
    function reinstallDatePicker(id, data) {
        $('.datepicker_for_added_date').datepicker();
    }
");
?>

<div style="float: left; width:75%;">
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'serviceRequest-grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'afterAjaxUpdate' => 'reinstallDatePicker',
    'columns'=>array(
        array(
            'header'=>'No.',
            'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
        ),
        array(
        	'header'=>'Nama Service',
        	'name'=>'id_nama_service',
        	'filter'=>CHtml::listData(NamaService::model()->findAll(), 'id_nama_service', 'keterangan'),
        	'value'=>'NamaService::model()->findByPk($data->id_nama_service)->keterangan',
        ),
        array(
            'header'=>'Start Date',
            'name'=>'tgl_mulai',
            'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model, 
                'attribute'=>'tgl_mulai', 
                'language' => 'en',
                'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
                'htmlOptions' => array(
                    'class' => 'datepicker_for_added_date',
                    'size' => '10',
                ),
                'defaultOptions' => array(  // (#3)
                    'showOn' => 'focus', 
                    'dateFormat' => 'yy-mm-dd',
                    'showOtherMonths' => true,
                    'selectOtherMonths' => true,
                    'changeMonth' => true,
                    'changeYear' => true,
                    'showButtonPanel' => true,
                )
            ), 
            true),
        ),
        array(
            'header'=>'End Date',
            'name'=>'tgl_selesai',
            'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model, 
                'attribute'=>'tgl_selesai', 
                'language' => 'en',
                'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
                'htmlOptions' => array(
                    'class' => 'datepicker_for_added_date',
                    'size' => '10',
                ),
                'defaultOptions' => array(  // (#3)
                    'showOn' => 'focus', 
                    'dateFormat' => 'yy-mm-dd',
                    'showOtherMonths' => true,
                    'selectOtherMonths' => true,
                    'changeMonth' => true,
                    'changeYear' => true,
                    'showButtonPanel' => true,
                )
            ), 
            true),
        ),
        array(
        	'header'=>'Status',
        	'name'=>'id_status',
        	'filter'=>CHtml::listData(Status::model()->findAll(), 'id_status', 'nama_status'),
        	'value'=>'Status::model()->findByPk($data->id_status)->nama_status',
        ),
        array(
            'name'=>'keperluan',
            'visible'=>false
        ),
        
        array(
            'header'=>'Details',
            'class'=>'CLinkColumn',
            'url'=>''
        ),
        array(
            'class'=>'CButtonColumn',
        )
    )
)); ?>
</div>
