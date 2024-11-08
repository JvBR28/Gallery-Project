<?php get_header(); ?>

<div class="max-w-4xl mx-auto p-8 px-20">
    <div class="mb-8 flex items-center space-x-4">
        <h2 class="text-lg font-semibold text-blue-600">Inserir nova imagem</h2>
        <div id="add-image-button" class="bg-gray-50 border-dashed border-2 border-gray-400 rounded-md py-2 px-12 flex justify-center items-center cursor-pointer hover:border-gray-500">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hand-tap.svg" alt="HandTap Icon" class="h-6 w-6 text-gray-600" />
            <span class="text-gray-600 ml-2">Clique aqui para adicionar uma nova imagem</span>
        </div>
    </div>

    <div class="bg-gray-50 p-3">
        <h3 class="text-xl font-semibold text-gray-800">Imagens</h3>
    </div>
    
    <!-- Seção para exibir imagens -->
    <div class="mt-4 grid grid-cols-4 gap-4 rounded-md">
        <?php
        global $wpdb;
        $table_name = $wpdb->prefix . 'gallery_images';
        $images = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");

        if (!empty($images)) :
            foreach ($images as $image) :
        ?>
                <div class="bg-gray-300 h-44 rounded-md overflow-hidden">
                    <img src="<?php echo esc_url($image->url); ?>" alt="Imagem de Gato" class="w-full h-full object-cover">
                </div>
        <?php
            endforeach;
        else :
            echo '<p class="col-span-4 text-center">Nenhuma imagem disponível. Adicione uma nova imagem!</p>';
        endif;
        ?>
    </div>
</div>

<script>
document.getElementById('add-image-button').addEventListener('click', function() {
    fetch('<?php echo admin_url("admin-ajax.php?action=add_cat_image"); ?>')
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Nova imagem adicionada com sucesso!');
            location.reload();
        } else {
            alert('Erro ao adicionar nova imagem!');
        }
    })
    .catch(error => console.error('Erro:', error));
});
</script>

<?php get_footer(); ?>
