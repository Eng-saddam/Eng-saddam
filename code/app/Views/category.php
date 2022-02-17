<?= $this->extend('layout\shop_main') ?>

<?= $this->section('contant') ?>


    <?= view('componants\shop\CatView',$cat) ?>


 

	<!--================End Feature Product Area =================-->
<?= $this->endsection() ?>