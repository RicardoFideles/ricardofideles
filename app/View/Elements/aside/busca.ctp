<div class="box busca">
	<form action="<?php echo $this->Html->url('/busca') ?>" id="search_block">
        <div>
            <label for="search_field_block"></label>
            <input type="text" name="q" id="search_field_block" onfocus="if(this.value=='Busca')this.value='';" onblur="if(this.value=='')this.value='Busca';" value="Busca">
            <input type="submit" id="search_submit_block" value="">
        </div>  
    </form>
</div>