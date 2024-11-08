<?php get_header(); ?>

<div class="max-w-4xl mx-auto p-8 px-20">
    <div class="mb-8 flex items-center space-x-4">
        <h2 class="text-lg font-semibold text-blue-600">Inserir nova imagem</h2>
        <div class="bg-gray-50 border-dashed border-2 border-gray-400 rounded-md py-2 px-12 flex justify-center items-center cursor-pointer hover:border-gray-500">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hand-tap.svg" alt="HandTap Icon" class="h-6 w-6 text-gray-600" />
            <span class="text-gray-600 ml-2">Clique aqui para adicionar uma nova imagem</span>
        </div>
    </div>

     <div class="bg-gray-50 p-3">
         <h3 class="text-xl font-semibold text-gray-800">Imagens</h3>
     </div>

    <div class="mt-4 grid grid-cols-4 gap-4">
        <div class="bg-gray-300 h-32 rounded-md"></div>
        <div class="bg-gray-300 h-32 rounded-md"></div>
        <div class="bg-gray-300 h-32 rounded-md"></div>
        <div class="bg-gray-300 h-32 rounded-md"></div>
        <div class="bg-gray-300 h-32 rounded-md"></div>
        <div class="bg-gray-300 h-32 rounded-md"></div>
        <div class="bg-gray-300 h-32 rounded-md"></div>
    </div>
</div>

<?php get_footer(); ?>
