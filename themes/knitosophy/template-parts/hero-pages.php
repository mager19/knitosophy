<?php

$background = get_field('default_background_pages_image', 'option');

?>
<div class="hero__pages" style='background-image: url(<?php echo $background; ?>);'>
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full">
                <h1 class="title">
                    <svg fill="none" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                        <path d="m4.3458 0.097656c-1.9336 0.42969-3.4375 1.7578-4.0723 3.5938-0.3125 0.92773-0.3125 2.4316 0.009766 3.3691 0.41992 1.2207 1.4258 2.4219 2.5488 3.0372 0.61524 0.332 1.8359 0.6445 2.5293 0.6445 0.30273 0 0.81054-0.0684 1.1328-0.1465l0.58594-0.1367 1.9824 1.9726 1.9726 1.9727-0.6348 0.9668c-2.5976 3.9453-3.4765 8.7305-2.4707 13.428 0.41992 1.9629 1.3379 4.1407 2.4707 5.8301l0.6446 0.957-1.0645 1.0645-1.0547 1.0547-0.57617-0.3516c-1.7969-1.0742-3.3301-1.0937-4.4727-0.0488s-1.2305 2.5098-0.27343 4.541l0.38085 0.8105-1.4941 1.4844c-0.82031 0.8106-1.6309 1.7188-1.8164 2.0215-0.41992 0.7031-0.66406 1.6309-0.66406 2.5977-0.0097656 0.6836 0.019531 0.7812 0.23437 0.9961 0.20508 0.2148 0.32227 0.2441 0.94727 0.2441 1.7578-0.0098 2.6465-0.459 4.4238-2.2363 0.69336-0.7032 1.3086-1.2793 1.3574-1.2793 0.04882 0 0.42968 0.332 0.84961 0.7324 0.41015 0.4004 0.82031 0.7324 0.89843 0.7324 0.43946 0 0.84961-0.4199 0.84961-0.8496 0-0.0781-0.35156-0.5078-0.78125-0.9473l-0.77148-0.8007 3.584-3.584 0.9473 0.8105c3.3886 2.8614 5.5469 3.9356 7.9101 3.9356 2.5489-0.0098 4.2578-1.1524 5-3.3496l0.2149-0.6348 1.3086-0.166c2.8711-0.3516 5.332-1.2403 7.6465-2.7637l0.957-0.6348 5.1367 5.1075c3.7793 3.7695 5.2539 5.1757 5.625 5.3711 0.6543 0.3418 1.582 0.5566 2.4609 0.5566 0.625 0 0.7422-0.0293 0.9473-0.2441 0.2149-0.2051 0.2442-0.3223 0.2442-0.9473 0-0.8789-0.2149-1.8066-0.5567-2.4609-0.1855-0.3418-1.0742-1.3086-2.8516-3.1055-2.3242-2.3438-2.6269-2.6172-2.9003-2.6172-0.2247 0-0.3809 0.0781-0.5176 0.2539-0.4199 0.5273-0.3809 0.5762 2.2754 3.252 2.6269 2.6464 2.8808 2.9785 3.0468 4.0039l0.0684 0.4297-0.4297-0.0684c-1.1914-0.1758-0.0879 0.8691-20.625-19.668l-19.033-19.033 0.66406-0.6543 0.6543-0.66406 15.586 15.586c12.744 12.744 15.635 15.586 15.84 15.586 0.4003 0 0.7714-0.3515 0.7714-0.7129 0-0.2734-0.1953-0.5078-1.5136-1.8261l-1.5235-1.5235 0.6446-0.957c1.2011-1.7871 2.08-3.916 2.5586-6.2012 0.2441-1.123 0.2636-1.416 0.2636-3.4277s-0.0195-2.3047-0.2636-3.4277c-0.4786-2.2754-1.3379-4.3653-2.5489-6.1914l-0.6445-0.9766 1.9727-1.9727 1.9824-1.9726 0.5859 0.1367c0.3223 0.0781 0.8301 0.1465 1.1328 0.1465 0.7031 0 1.9141-0.3125 2.5586-0.6543 0.7324-0.39063 1.8262-1.5137 2.1875-2.2559 1.4844-2.9688 0.0586-6.4746-3.0762-7.5586-0.9277-0.3125-2.4316-0.3125-3.3593 0-1.25 0.42969-2.4317 1.416-3.0371 2.5293-0.3418 0.64454-0.6543 1.8555-0.6543 2.5586 0 0.30273 0.0683 0.81055 0.1464 1.1328l0.1368 0.58594-1.9727 1.9824-1.9726 1.9727-0.9766-0.6446c-3.8379-2.539-8.6133-3.4472-13.232-2.5195-1.9141 0.39063-4.3262 1.3965-6.0157 2.5293l-0.957 0.6445-1.9824-1.9824-1.9727-1.9824 0.1368-0.58594c0.1953-0.81055 0.1855-1.543-0.0489-2.4316-0.59568-2.334-2.539-3.916-4.9316-4.0137-0.47851-0.019531-1.0547 0-1.2695 0.048828zm2.627 1.7383c0.86914 0.41015 1.4551 0.97656 1.8652 1.8164 1.6211 3.2715-1.7969 6.7872-5.0879 5.2441-0.86914-0.40039-1.4356-0.96679-1.875-1.8457-0.3418-0.70312-0.36133-0.79101-0.36133-1.6699 0-0.84961 0.0293-0.99609 0.3125-1.5918 0.39063-0.83008 0.94727-1.4355 1.6797-1.8164 0.76172-0.41016 1.1914-0.50782 2.0801-0.46875 0.5957 0.02929 0.89843 0.10742 1.3867 0.33203zm39.258 0c0.8887 0.41015 1.4551 0.97656 1.8946 1.8555 0.3417 0.70312 0.3613 0.79101 0.3613 1.6797 0 0.88868-0.0196 0.97657-0.3711 1.6797-0.4297 0.88867-0.9961 1.4258-1.9238 1.875-0.5762 0.27344-0.7227 0.30274-1.5625 0.30274-0.8399 0-0.9864-0.0293-1.5821-0.3125-0.8593-0.4004-1.5625-1.1035-1.9629-1.9629-0.2832-0.5957-0.3125-0.74218-0.3125-1.5918 0-0.87891 0.0196-0.9668 0.3711-1.6699 0.5176-1.0645 1.4746-1.8457 2.5782-2.1289 0.6933-0.17578 1.8164-0.04883 2.5097 0.27344zm-5.3613 7.3144 0.6445 0.64453-1.7383 1.7481-1.7382 1.7382-0.6543-0.6542-0.6641-0.6641 1.7285-1.7285c0.957-0.95706 1.7481-1.7383 1.7481-1.7383 0.0097 0 0.3125 0.29297 0.6738 0.6543zm-17.148 0.71289c-0.5762 2.8222-0.3711 6.0742 0.5664 8.9062l0.3418 1.045-0.2637 0.3417c-0.1465 0.1954-0.3223 0.3516-0.3809 0.3516-0.1367 0-3.5742-3.4375-3.5742-3.5742 0-0.0488-0.0684-0.6152-0.1465-1.2598-0.166-1.4062-0.1855-3.0566-0.039-4.4726 0.1562-1.5821 0.1367-1.5528 0.8789-1.7578 0.5273-0.13672 2.1191-0.41016 2.6367-0.44922 0.1465-0.00976 0.1465 0.06836-0.0195 0.86914zm3.955-0.67383 0.7715 0.11719-0.0683 1.0352c-0.0293 0.5664-0.1075 1.2988-0.1563 1.6211-0.0879 0.5078-0.0781 0.6152 0.0879 0.8301 0.2734 0.3808 0.6445 0.4687 0.957 0.2343 0.3321-0.2441 0.3907-0.4785 0.5274-2.0214 0.0683-0.6836 0.1562-1.2403 0.1953-1.2403 0.1562 0 1.5625 0.58598 2.334 0.97658l0.7812 0.3906-0.0488 0.3711c-0.2149 1.5918-0.3027 2.0801-0.5859 3.1934-0.8204 3.2129-2.4903 6.3183-4.6485 8.6816l-0.5078 0.5566-1.1523-1.1425-1.1524-1.1524 0.5176-0.5859c1.1328-1.2891 2.2851-3.1152 2.8906-4.5703 0.2832-0.6739 0.3028-0.791 0.1953-1.0449-0.1465-0.3614-0.5468-0.5469-0.9179-0.4102-0.2051 0.0781-0.3516 0.3027-0.6543 0.957-0.5274 1.1621-1.2696 2.4024-1.3672 2.3047-0.1074-0.1172-0.5469-1.8945-0.6836-2.8125-0.2442-1.6504-0.127-4.0332 0.2734-5.8496l0.1465-0.67383 0.752 0.05859c0.4101 0.0293 1.0937 0.11719 1.5136 0.17578zm-8.8965 1.621c-0.0488 0.3125-0.0781 1.4356-0.0781 2.5 0 1.0547-0.0195 1.9239-0.0488 1.9239-0.0684 0-3.125-3.0664-3.125-3.1348 0-0.166 2.8906-1.8359 3.2031-1.8457 0.0879 0 0.0977 0.1367 0.0488 0.5566zm16.729 2.0997c0.4394 0.371 0.9961 0.8984 1.2402 1.1816l0.4394 0.5176-0.3222 1.2695c-1.0059 3.8965-2.8028 7.2656-5.5664 10.43l-0.7617 0.8594-1.0547-1.0547c-0.586-0.586-1.0645-1.1133-1.0645-1.1719s0.1172-0.2051 0.2539-0.3418c0.5078-0.4687 1.5235-1.7578 2.2461-2.832 1.7676-2.6465 2.9297-5.7324 3.5059-9.2969 0.0683-0.4297 0.039-0.4492 1.084 0.4395zm-22.158 3.8086c0.664 0.664 1.2011 1.2597 1.2011 1.3378 0 0.0684 0.1075 0.6348 0.2442 1.2403 0.3222 1.3965 0.8691 3.1054 1.455 4.4531 0.2442 0.5762 0.4493 1.0938 0.4493 1.1426 0 0.0879-1.6602 0.4492-2.5391 0.5469l-0.5371 0.0683-0.459-1.1621c-0.8594-2.1875-1.3672-4.0527-1.748-6.3379l-0.1953-1.2305 0.4101-0.625c0.2246-0.3418 0.4297-0.625 0.4688-0.625 0.0293 0 0.5957 0.5372 1.25 1.1915zm25.938 1.0546c0.332 0.6739 0.6933 1.4746 0.8007 1.7774 0.2344 0.6933 0.2051 0.791-0.9375 3.1054-0.9179 1.8458-1.914 3.4766-3.0078 4.8926-0.8789 1.1524-2.2656 2.7246-2.4023 2.7246s-2.0996-1.9726-2.0996-2.1093c0-0.0586 0.0976-0.1856 0.2051-0.293 0.3906-0.3418 1.748-2.002 2.4218-2.9492 1.6895-2.4024 2.9883-5.0879 3.7891-7.8711 0.2734-0.9278 0.2734-0.9278 0.4492-0.7129 0.0879 0.1172 0.4395 0.7617 0.7813 1.4355zm-28.574 3.8575c0.1856 0.6933 0.5567 1.8457 0.8204 2.5586 0.2636 0.7031 0.4785 1.2988 0.4785 1.3183 0 0.0586-1.9922-0.1074-2.5098-0.2246l-0.51758-0.0977v-0.6543c0-1.3574 0.41993-3.6132 0.90821-4.9023l0.20507-0.5371 0.1367 0.6348c0.0684 0.3515 0.2832 1.2011 0.4785 1.9043zm9.4043 1.914c0 0.0684-1.7187 0.8692-1.8652 0.8692-0.2148 0-1.748-3.8477-1.748-4.3848 0-0.0879 0.8105 0.6543 1.8066 1.6504s1.8066 1.8359 1.8066 1.8652zm20.889 1.3574c0.0098 1.3477-0.1074 2.5293-0.3711 3.6231l-0.166 0.7226-0.7227-0.0195c-0.8691-0.0293-2.6367-0.3223-2.6367-0.4297 0-0.0488 0.2735-0.459 0.6153-0.9082 0.8203-1.123 1.7285-2.5976 2.5-4.0625l0.6445-1.2207 0.0684 0.5371c0.0292 0.293 0.0585 1.084 0.0683 1.7578zm-17.666 2.2461c-0.5371 0.42-3.1445 1.6504-4.3262 2.0411-2.4902 0.8203-4.7558 1.1425-7.4414 1.0546-1.3281-0.039-1.6699-0.0879-1.7676-0.205-0.12696-0.1856-0.58594-2.0508-0.6836-2.7832l-0.05859-0.5274 0.46875 0.0684c3.7891 0.5273 7.3047 0 10.537-1.5918l1.1719-0.5762 1.1719 1.1621 1.1718 1.1719-0.2441 0.1855zm2.4805 2.0411 1.0644 1.0742-0.918 0.5957c-1.1425 0.7422-3.0273 1.6992-4.414 2.2558-0.6934 0.2735-1.1133 0.4981-1.211 0.6446-0.2539 0.3808 0.0098 0.9375 0.4981 1.0644 0.5078 0.127 4.0625-1.5234 6.0059-2.793l1.1035-0.7128 1.0644 1.0644c0.586 0.586 1.0645 1.084 1.0645 1.1231 0 0.0293-0.3809 0.3222-0.8496 0.6445-3.2032 2.1973-7.0215 3.8184-10.801 4.5801l-1.3086 0.2636-0.8203-0.5371c-0.8301-0.5371-2.627-1.9922-2.627-2.1191 0-0.0391 0.586-0.127 1.2989-0.1856 1.7871-0.166 3.0957-0.4296 3.2617-0.664 0.2148-0.2832 0.1172-0.8203-0.1758-1.0352-0.2539-0.1855-0.2637-0.1855-1.4649 0.0098-0.664 0.1074-1.6015 0.2246-2.0898 0.2539-0.4785 0.0293-1.1719 0.0781-1.5332 0.1074l-0.6445 0.0488-0.6055-0.8984c-0.4785-0.7226-1.2695-2.1289-1.2695-2.2558 0-0.0196 0.957-0.0293 2.1289-0.0391 2.3828 0 3.623-0.166 5.8105-0.7715 1.9531-0.5371 4.5508-1.6797 5.7324-2.5293 0.1856-0.1367 0.4102-0.2441 0.4883-0.2539 0.0879 0 0.625 0.4785 1.211 1.0645zm11.436 1.1816c0.4883 0.0977 1.2695 0.2246 1.7383 0.2734 0.4785 0.0586 0.8887 0.1172 0.918 0.1465 0.1367 0.1465-1.7872 3.6817-2.002 3.6817-0.0391 0-0.7519-0.6836-1.6016-1.5332l-1.5234-1.5235 0.5957-0.6738c0.4688-0.5274 0.6445-0.6641 0.8008-0.6152 0.1074 0.0292 0.5957 0.1367 1.0742 0.2441zm-4.4922 5.7617c0.8594 0.8594 1.5235 1.5625 1.4844 1.5625-0.3516 0-3.6328-1.2305-4.5898-1.7285l-0.2735-0.1367 0.8594-0.625c0.4687-0.3418 0.8789-0.625 0.9082-0.625 0.0293-0.0098 0.7519 0.6933 1.6113 1.5527zm-20.352 2.7734-0.8692 0.8692-0.6152-0.5176c-0.3418-0.2832-0.6641-0.5469-0.7227-0.5957-0.0586-0.0586 0.2539-0.4394 0.8301-1.0156l0.9277-0.9277 0.6543 0.6542 0.6641 0.6641-0.8691 0.8691zm16.894-1.5136c1.1816 0.5664 1.8652 0.8398 3.6035 1.4453 0.3516 0.1269-3.3887 1.6894-4.043 1.6894-0.2441 0-2.1875-0.9765-3.3593-1.6796l-0.8204-0.4883 1.6016-0.8106c0.8789-0.4394 1.6016-0.8105 1.6016-0.8203 0.0097 0 0.6445 0.293 1.416 0.6641zm-22.148 0.9863c0.36133 0.1758 0.6543 0.3516 0.6543 0.3809 0 0.039-0.61523 0.6738-1.3574 1.416l-1.3574 1.3574-0.19532-0.3809c-0.50781-1.0058-0.61523-2.0019-0.26367-2.539 0.46875-0.7129 1.3574-0.8008 2.5195-0.2344zm8.2324 1.2305c2.2851 1.5136 4.873 2.4414 7.7051 2.7734 0.5371 0.0684 0.996 0.1367 1.0156 0.1563 0.0195 0.0195-0.0391 0.2441-0.1367 0.498-0.1172 0.293-0.3907 0.6836-0.7325 1.0254-0.7226 0.7129-1.4648 0.9766-2.832 0.9766-1.8066 0.0097-3.418-0.7715-6.1523-2.959-0.5079-0.4102-1.084-0.8789-1.2696-1.0449l-0.3418-0.3028 0.8789-0.8789c0.4786-0.4883 0.8789-0.8887 0.8789-0.8887 0.0098 0 0.4493 0.293 0.9864 0.6446zm8.4863-0.0586c0.3809 0.2441 1.0547 0.664 1.5137 0.9375l0.8301 0.4785-1.1622 0.0293c-0.6738 0.0098-1.6211-0.0391-2.2461-0.127-1.0839-0.1464-3.33-0.7129-3.2421-0.8105 0.0293-0.0293 0.7031-0.2344 1.4941-0.4688 0.8008-0.2246 1.5527-0.4589 1.6895-0.5078 0.2734-0.1074 0.2148-0.1367 1.123 0.4688zm-14.102 0.6543c0.37106 0.3027 0.67386 0.5859 0.67386 0.6152s-1.5918 1.6406-3.5352 3.584c-3.7598 3.75-3.9648 3.9258-5.0488 4.0918l-0.42968 0.0684 0.06836-0.4297c0.16601-1.0743 0.34179-1.2891 4.043-5 1.9141-1.9141 3.4961-3.4864 3.5156-3.4864s0.3418 0.2539 0.71289 0.5567z" fill="#fff" />
                    </svg>
                    <span><?php the_title(); ?></span>
                </h1>
                <?php get_template_part('template-parts/content', 'breadcrumbs'); ?>

            </div>
        </div>
    </div>
</div>