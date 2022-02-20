<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-semibold">{{('admin')}}</h1>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        
        <head>
            <title>check</title>
            <meta charset='UTF-8'/> 
            <link rel='stylesheet' href="/css/style.css"/>
            <div class="contain">
            <img src="/pic/korn.JPG" alt="">
            </div>
            <body>
                <header id='test1' class="header"></header>
                <div class='title'>
                    <h1>PORTFOLIO</h1>
                    <p>aboute me</p>
                </div>    
                <section> 
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis ea ratione accusantium illo voluptatum aspernatur libero dignissimos maiores porro. Ea, earum rem labore eius porro tempore obcaecati delectus eum dolor reiciendis, beatae perspiciatis, id magni numquam. Beatae a dicta fuga debitis quod minima odit, ad molestias eaque dolor architecto cumque incidunt. Voluptas dolores magni quibusdam rerum minus quis blanditiis, aspernatur cum consequuntur expedita repudiandae omnis similique, tenetur, itaque quae odio accusamus quaerat pariatur sit eaque? Ipsum earum dolorum reprehenderit architecto, dignissimos at tempore assumenda ad quos omnis provident neque eligendi nam veniam blanditiis officiis est laudantium non doloremque perspiciatis iure amet iusto facere. Dolore dolores repudiandae ab assumenda eius, molestias quod earum ullam amet sapiente ut ipsa? Nihil eligendi exercitationem distinctio at reprehenderit facilis corrupti officiis magnam possimus incidunt dolorem ea, rerum ipsum voluptatibus? Expedita cum dolores maiores quibusdam voluptatibus nemo veniam, fugit unde sed recusandae nobis facere ipsa, natus sunt perferendis repellendus facilis voluptate doloremque? Totam sint minima incidunt minus mollitia laboriosam saepe, natus aliquam velit vero suscipit, libero illo consequatur repellat itaque amet distinctio corporis facere repudiandae doloribus dignissimos sapiente maiores? Optio nam omnis adipisci laudantium expedita quibusdam officia beatae praesentium? Soluta libero amet quae quas repellat minus.</p>
                </section>
                
                <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script> 
                <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script> 
                <script src="/js/dashboard.blade.js"></script>
            </body>
            
        </head>
        </html>
    </x-admin-layout>
