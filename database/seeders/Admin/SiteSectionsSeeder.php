<?php

namespace Database\Seeders\Admin;

use App\Models\Admin\Journal;
use Illuminate\Database\Seeder;
use App\Models\Admin\SiteSections;
use App\Models\Admin\WebJournalCategory;

class SiteSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $site_sections = array(
            array('key' => 'site_cookie','value' => '{"status":true,"link":"https:\\/\\/www.appdevs.net\\/policy","desc":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."}','status' => '1','serialize' => NULL,'created_at' => '2023-07-16 06:28:14','updated_at' => '2023-07-16 06:28:14'),
            array('key' => 'glance-section','value' => '{"items":{"64b38dfe36bf8":{"image":"","id":"64b38dfe36bf8"},"64b38dfe36c04":{"image":"","id":"64b38dfe36c04"},"64b38dfe36c06":{"image":"","id":"64b38dfe36c06"},"64b38dfe36c07":{"image":"","id":"64b38dfe36c07"},"64b38dfe36c08":{"image":"","id":"64b38dfe36c08"}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-16 06:28:14','updated_at' => '2023-07-16 06:28:14'),
            array('key' => 'banner-section','value' => '{"image":"seeder\\/bg1.png","language":{"en":{"heading":"Seamless Money Transfer, Worldwide Connection","sub_heading":"we believe in connecting hearts and empowering dreams through secure, fast, and reliable money transfers. Whether you\\u2019re sending support to family abroad or facilitating international business transactions, our cutting-edge remittance solution is your trusted partner.","button_name":"Join Today","video_link":"https:\\/\\/www.youtube.com\\/embed\\/7p6hG3plQj4?si=KNjywn8p37nLnLRC"},"es":{"heading":"Transferencia de dinero sin problemas, conexi\\u00f3n mundial","sub_heading":"Creemos en conectar corazones y potenciar sue\\u00f1os a trav\\u00e9s de transferencias de dinero seguras, r\\u00e1pidas y confiables. Ya sea que est\\u00e9 enviando apoyo a familiares en el extranjero o facilitando transacciones comerciales internacionales, nuestra soluci\\u00f3n de remesas de vanguardia es su socio de confianza.","button_name":"\\u00danete hoy","video_link":"https:\\/\\/www.youtube.com\\/embed\\/7p6hG3plQj4?si=KNjywn8p37nLnLRC"}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-22 04:41:20','updated_at' => '2023-09-10 10:55:10'),
            array('key' => 'about-section','value' => '{"image":"seeder\\/about.png","language":{"en":{"heading":"We Provide Best Payment Solutions Worldwide","sub_heading":"At XRemit, we take pride in being a trusted and reliable remittance company that facilitates seamless money transfers across borders. With a commitment to excellence and customer satisfaction, we provide a comprehensive range of remittance services to cater to the diverse needs of our valued customers. In this blog post, we\'ll explore why our remittance company stands out from the crowd and how we ensure a secure and efficient money transfer experience. Our remittance company boasts an extensive network of trusted partners and financial institutions worldwide. This enables us to provide seamless remittance services to numerous countries and regions, ensuring that your money reaches your loved ones, no matter where they are located. Our global reach and partnerships allow us to offer competitive exchange rates and quick transfer times."},"es":{"heading":"Brindamos las mejores soluciones de pago en todo el mundo","sub_heading":"En XRemit, estamos orgullosos de ser una empresa de remesas confiable y confiable que facilita transferencias de dinero sin problemas a trav\\u00e9s de fronteras. Con un compromiso con la excelencia y la satisfacci\\u00f3n del cliente, brindamos una amplia gama de servicios de remesas para satisfacer las diversas necesidades de nuestros valiosos clientes. En esta publicaci\\u00f3n de blog, exploraremos por qu\\u00e9 nuestra empresa de remesas se destaca entre la multitud y c\\u00f3mo garantizamos una experiencia de transferencia de dinero segura y eficiente. Nuestra empresa de remesas cuenta con una extensa red de socios e instituciones financieras confiables en todo el mundo. Esto nos permite brindar servicios de remesas fluidos a numerosos pa\\u00edses y regiones, garantizando que su dinero llegue a sus seres queridos, sin importar d\\u00f3nde se encuentren. Nuestro alcance global y nuestras asociaciones nos permiten ofrecer tipos de cambio competitivos y tiempos de transferencia r\\u00e1pidos."}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-16 07:18:15','updated_at' => '2023-09-10 11:45:23'),
            array('key' => 'choose-us-section','value' => '{"image":"seeder\\/choose.png","video_link":"https:\\/\\/www.youtube.com\\/embed\\/7p6hG3plQj4?si=KNjywn8p37nLnLRC","button_name":"Get Started","language":{"en":{"title":"WHY CHOOSE US","heading":"Your Ideal Money Transfer Partner","sub_heading":"<p>We stand as your reliable and secure financial partner, prioritizing your financial safety with cutting-edge security measures and robust data protection. With a global reach and local expertise, we effortlessly bridge the gap between borders while ensuring a deep understanding of local financial systems. Our commitment to efficiency means your money moves swiftly and seamlessly, free from the hassles of lengthy paperwork. Count on our 24\\/7 customer support team to be there when you need assistance, ensuring a top-notch experience.<\\/p>"},"es":{"title":"POR QU\\u00c9 ELEGIRNOS","heading":"Su socio ideal para transferencias de dinero","sub_heading":"<p>Somos su socio financiero confiable y seguro, priorizando su seguridad financiera con medidas de seguridad de vanguardia y una s\\u00f3lida protecci\\u00f3n de datos. Con un alcance global y experiencia local, salvamos sin esfuerzo la brecha entre fronteras y al mismo tiempo garantizamos una comprensi\\u00f3n profunda de los sistemas financieros locales. Nuestro compromiso con la eficiencia significa que su dinero se mueve de manera r\\u00e1pida y fluida, sin las molestias de largos tr\\u00e1mites burocr\\u00e1ticos. Cuente con nuestro equipo de atenci\\u00f3n al cliente 24 horas al d\\u00eda, 7 d\\u00edas a la semana, para estar all\\u00ed cuando necesite ayuda, garantizando una experiencia de primer nivel.<\\/p>"}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-16 08:51:35','updated_at' => '2023-09-10 11:28:46'),
            array('key' => 'brand-section','value' => '{"items":{"64b3c781a8341":{"id":"64b3c781a8341","image":"seeder/brand-1.png"},"64b3c78d42d9e":{"id":"64b3c78d42d9e","image":"seeder/brand-2.png"},"64b3c7982fd33":{"id":"64b3c7982fd33","image":"seeder/brand-3.png"},"64b3c7a393bd0":{"id":"64b3c7a393bd0","image":"seeder/brand-4.png"},"64b3c7ae4b210":{"id":"64b3c7ae4b210","image":"seeder/brand-5.png"},"64b3c7bab0029":{"id":"64b3c7bab0029","image":"seeder/brand-6.png"}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-16 10:33:11','updated_at' => '2023-07-16 10:40:39'),
            array('key' => 'feature-section','value' => '{"language":{"en":{"title":"OUR FEATURES","heading":"XRemit Pro - Where Money Meets Efficiency"},"es":{"title":"NUESTROS CARACTER\\u00cdSTICAS","heading":"XRemit Pro: donde el dinero se une a la eficiencia"}},"items":{"64b7896e1fe97":{"language":{"en":{"item_title":"Swift International Transfers","description":"Send money globally with lightning speed. Experience swift and secure international remittances for seamless cross-border transactions."},"es":{"item_title":"Transferencias internacionales r\\u00e1pidas","description":"Env\\u00eda dinero a nivel mundial a la velocidad del rayo. Experimente remesas internacionales r\\u00e1pidas y seguras para transacciones transfronterizas sin problemas."}},"id":"64b7896e1fe97","image":"seeder\\/Easy-to-Sign-Up.png"},"64b789882ece9":{"language":{"en":{"item_title":"Bank Deposit","description":"Effortlessly transfer funds to bank accounts. Enjoy the ease of bank-to-bank transfers, ensuring your money reaches its destination securely."},"es":{"item_title":"Deposito bancario","description":"Transfiera fondos sin esfuerzo a cuentas bancarias. Disfrute de la facilidad de las transferencias de banco a banco, garantizando que su dinero llegue a su destino de forma segura."}},"id":"64b789882ece9","image":"seeder\\/Activity-Tracking.png"},"64b789b66fe26":{"language":{"en":{"item_title":"Mobile Money","description":"Modernize your money with mobile payments. Seamlessly connect to mobile money services, embracing the digital age of financial transactions."},"es":{"item_title":"Dinero m\\u00f3vil","description":"Moderniza tu dinero con pagos m\\u00f3viles. Con\\u00e9ctese sin problemas a servicios de dinero m\\u00f3vil, adoptando la era digital de las transacciones financieras."}},"id":"64b789b66fe26","image":"seeder\\/Trusted-and-Legitimate.png"},"64b789e19e4ab":{"language":{"en":{"item_title":"Saved Recipient Profiles","description":"Simplify future transfers with saved recipients. Store recipient details for quick and hassle-free transactions, eliminating repetitive data entry."},"es":{"item_title":"Perfiles de destinatarios guardados","description":"Simplifique transferencias futuras con destinatarios guardados. Almacene los detalles del destinatario para realizar transacciones r\\u00e1pidas y sin complicaciones, eliminando la entrada de datos repetitiva."}},"id":"64b789e19e4ab","image":"seeder\\/Safe.png"},"64b789fe6d089":{"language":{"en":{"item_title":"Real-time Transaction Tracking","description":"Stay informed with live transaction updates. Keep tabs on your money\\u2019s journey with real-time tracking, ensuring peace of mind."},"es":{"item_title":"Seguimiento de transacciones en tiempo real","description":"Mant\\u00e9ngase informado con actualizaciones de transacciones en vivo. Controle el recorrido de su dinero con seguimiento en tiempo real, lo que garantiza su tranquilidad."}},"id":"64b789fe6d089","image":"seeder\\/Cheap-Exchange-Rate.png"},"64b78a2eac4d9":{"language":{"en":{"item_title":"Security and Support","description":"Protect and assist with 2FA and expert help. Rely on top-notch security with two-factor authentication (2FA) and dedicated customer support."},"es":{"item_title":"Seguridad y soporte","description":"Proteja y ayude con 2FA y ayuda de expertos. Conf\\u00ede en una seguridad de primer nivel con autenticaci\\u00f3n de dos factores (2FA) y atenci\\u00f3n al cliente dedicada."}},"id":"64b78a2eac4d9","image":"seeder\\/247-Support.png"}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-19 04:37:21','updated_at' => '2023-09-10 11:21:01'),
            array('key' => 'how-its-work-section','value' => '{"image":"seeder\\/hiw.webp","language":{"en":{"title":"HOW IT WORK","heading":"The Ultimate Choice for Fast and Secure Remittances","sub_heading":"Getting started with XRemit Pro is a breeze. First, create your account by providing some basic information and setting up secure login credentials. Next, choose your preferred transfer method, whether it\\u2019s international remittance, bank transfer, or mobile money, and input the recipient\\u2019s details along with the transfer amount. Finally, review your transaction, make a secure payment, and relax as XRemit Pro handles the rest. You\\u2019ll receive instant confirmation and real-time tracking information, ensuring that your money is on its way with the utmost security and convenience. Join us today to experience the future of hassle-free money transfers."},"es":{"title":"COMO FUNCIONA","heading":"La mejor opci\\u00f3n para remesas r\\u00e1pidas y seguras","sub_heading":"Comenzar a utilizar XRemit Pro es muy sencillo. Primero, cree su cuenta proporcionando informaci\\u00f3n b\\u00e1sica y configurando credenciales de inicio de sesi\\u00f3n seguras. A continuaci\\u00f3n, elija su m\\u00e9todo de transferencia preferido, ya sea remesa internacional, transferencia bancaria o dinero m\\u00f3vil, e ingrese los detalles del destinatario junto con el monto de la transferencia. Finalmente, revise su transacci\\u00f3n, realice un pago seguro y rel\\u00e1jese mientras XRemit Pro se encarga del resto. Recibir\\u00e1 confirmaci\\u00f3n instant\\u00e1nea e informaci\\u00f3n de seguimiento en tiempo real, lo que garantizar\\u00e1 que su dinero est\\u00e9 en camino con la m\\u00e1xima seguridad y conveniencia. \\u00danase a nosotros hoy para experimentar el futuro de las transferencias de dinero sin complicaciones."}},"items":{"64b77c957751d":{"language":{"en":{"item_title":"Create Your Account","description":"Just provide your basic information and set up your secure login credentials."},"es":{"item_title":"Crea tu cuenta","description":"Simplemente proporcione su informaci\\u00f3n b\\u00e1sica y configure sus credenciales de inicio de sesi\\u00f3n seguras."}},"id":"64b77c957751d","image":"seeder\\/Download-App.png"},"64b77cb803e47":{"language":{"en":{"item_title":"Choose Transfer Method","description":"Select the transfer method that suits your needs \\u2013and enter the recipient\\u2019s details and the amount you wish to send."},"es":{"item_title":"Elija el m\\u00e9todo de transferencia","description":"Seleccione el m\\u00e9todo de transferencia que se adapte a sus necesidades e ingrese los datos del destinatario y el monto que desea enviar."}},"id":"64b77cb803e47","image":"seeder\\/Create-Account.png"},"64b77cd6b4f75":{"language":{"en":{"item_title":"Confirm and Pay","description":"Review your transaction details, ensuring accuracy. Make a secure payment using your preferred method"},"es":{"item_title":"Confirmar y pagar","description":"Revise los detalles de su transacci\\u00f3n, garantizando la precisi\\u00f3n. Realiza un pago seguro usando tu m\\u00e9todo preferido"}},"id":"64b77cd6b4f75","image":"seeder\\/LetStart.png"}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-19 06:00:57','updated_at' => '2023-09-10 11:25:15'),
            array('key' => 'testimonial-section','value' => '{"language":{"en":{"title":"CLIENTS TESTIMONIALS","heading":"What Our Client Says"},"es":{"title":null,"heading":null}},"items":{"64b794889e38a":{"language":{"en":{"comment":"XRemit Pro has made sending money to my family abroad a breeze. The process is so straightforward, and the real-time tracking gives me peace of mind. Highly recommended!"},"es":{"comment":"XRemit Pro ha hecho que enviar dinero a mi familia en el extranjero sea muy sencillo. El proceso es muy sencillo y el seguimiento en tiempo real me da tranquilidad. \\u00a1Muy recomendable!"}},"id":"64b794889e38a","image":"seeder\\/client-1.jpg","name":"Sarah Smith","designation":"Marketing Manager","created_at":"2023-07-19T07:45:12.649217Z"},"64b7a36071fa5":{"language":{"en":{"comment":"As a business owner, I rely on XRemit Pro for international transactions. The security features and quick bank transfers have saved me time and worry. It\\u2019s a game-changer!"},"es":{"comment":"Como propietario de un negocio, conf\\u00edo en XRemit Pro para transacciones internacionales. Las funciones de seguridad y las transferencias bancarias r\\u00e1pidas me han ahorrado tiempo y preocupaciones. \\u00a1Es un punto de inflexi\\u00f3n!"}},"id":"64b7a36071fa5","image":"seeder\\/client-2.jpg","name":"John Anderson","designation":"Entrepreneur","created_at":"2023-07-19T08:48:32.484243Z"},"64b7a36dadd45":{"language":{"en":{"comment":"XRemit Pro\\u2019s customer support is exceptional. They resolved an issue I had in no time, and their live support is a real plus. Trustworthy service all the way!"},"es":{"comment":"La atenci\\u00f3n al cliente de XRemit Pro es excepcional. Resolvieron un problema que tuve en poco tiempo y su soporte en vivo es una verdadera ventaja. \\u00a1Servicio confiable en todo momento!"}},"id":"64b7a36dadd45","image":"seeder\\/client-3.jpg","name":"Linda Martinez","designation":"IT Specialist","created_at":"2023-07-19T08:48:45.729608Z"},"64b7a37a411d6":{"language":{"en":{"comment":"I\\u2019ve tried various remittance platforms, but XRemit Pro stands out. The mobile money option is so convenient, and the AI-driven insights have helped me manage my finances better."},"es":{"comment":"Prob\\u00e9 varias plataformas de remesas, pero XRemit Pro se destaca. La opci\\u00f3n de dinero m\\u00f3vil es muy conveniente y los conocimientos generados por la inteligencia artificial me han ayudado a administrar mejor mis finanzas."}},"id":"64b7a37a411d6","image":"seeder\\/team.jpg","name":"David Lee","designation":"Finance Analyst","created_at":"2023-07-19T08:48:58.283212Z"}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-19 07:39:38','updated_at' => '2023-09-10 11:27:38'),
            array('key' => 'journal-section','value' => '{"language":{"en":{"title":"WEB JOURNAL","heading":"Read Our Recent Web Journal"},"es":{"title":null,"heading":null}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-19 09:16:30','updated_at' => '2023-07-19 09:16:30'),
            array('key' => 'app-download-section','value' => '{"image":"seeder\\/app_download.webp","google_play_link":"https:\\/\\/play.google.com\\/store\\/games?device=windows&pli=1","app_store_link":"https:\\/\\/www.apple.com\\/app-store\\/","language":{"en":{"title":"APP DOWNLOAD","heading":"Download the XRemit Pro App Today","sub_heading":"Unlock the power of seamless money transfers right at your fingertips with the XRemit Pro mobile app. Download the app now and take control of your financial world! Available for both Android and iOS devices."},"es":{"title":"DESCARGAR LA APLICACI\\u00d3N","heading":"Descargue la aplicaci\\u00f3n XRemit Pro hoy","sub_heading":"Desbloquee el poder de las transferencias de dinero fluidas al alcance de su mano con la aplicaci\\u00f3n m\\u00f3vil XRemit Pro. \\u00a1Descarga la aplicaci\\u00f3n ahora y toma el control de tu mundo financiero! Disponible para dispositivos Android e iOS."}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-19 10:59:37','updated_at' => '2023-09-10 11:30:08'),
            array('key' => 'footer-section','value' => '{"footer":{"language":{"en":{"description":"We compared and reviewed the best money transfer web & apps based on features, fees, transfer remittance, Me link for a quick and secure payment option."},"es":{"description":"Comparamos y revisamos las mejores aplicaciones y web de transferencia de dinero seg\\u00fan las funciones, tarifas, transferencias y enlace Me para una opci\\u00f3n de pago r\\u00e1pida y segura."}},"image":""},"social_links":[{"icon":"fab fa-instagram","link":"https:\\/\\/www.instagram.com\\/"},{"icon":"fab fa-linkedin","link":"https:\\/\\/www.linkedin.com\\/"},{"icon":"fab fa-facebook","link":"https:\\/\\/www.facebook.com\\/"},{"icon":"fab fa-twitter","link":"https:\\/\\/www.twitter.com\\/"}]}','status' => '1','serialize' => NULL,'created_at' => '2023-07-20 03:41:33','updated_at' => '2023-09-10 11:44:44'),
            array('key' => 'subscribe-section','value' => '{"language":{"en":{"title":"Subscribe","description":"Don\\u2019t miss to subscribe to our new feeds, kindly fill the form below."},"es":{"title":null,"description":null}}}','status' => '1','serialize' => NULL,'created_at' => '2023-07-20 04:08:42','updated_at' => '2023-07-20 04:09:55'),
            array('key' => 'contact-section','value' => '{"schedules":[{"schedule":"Monday - Friday: 10:00 - 20:00"},{"schedule":"Sunday & Saturday: 9:30 - 22:00"}],"language":{"en":{"title":"CONTACT US","description":"Get In Touch With Us"},"es":{"title":null,"description":null}},"phone":"(+1) - 23355 - 8674","address":"225 8th Ave, New York, NY 199980, USA","email":"hello@example.com","image":"seeder/contact.png"}','status' => '1','serialize' => NULL,'created_at' => '2023-07-20 06:33:10','updated_at' => '2023-07-20 06:45:09')
        );

        SiteSections::insert($site_sections,['key'],['value','status']);

        //journal Category 
        $web_journal_categories = array(
            array('slug' => 'payment','name' => '{"language":{"en":{"name":"Payment"},"es":{"name":null}}}','status' => '1','created_at' => '2023-07-23 07:45:38','updated_at' => '2023-07-23 07:45:38'),
            array('slug' => 'send-money','name' => '{"language":{"en":{"name":"Send Money"},"es":{"name":null}}}','status' => '1','created_at' => '2023-07-23 07:45:46','updated_at' => '2023-07-23 07:45:46'),
            array('slug' => 'transfer','name' => '{"language":{"en":{"name":"Transfer"},"es":{"name":null}}}','status' => '1','created_at' => '2023-07-23 07:45:59','updated_at' => '2023-07-23 07:45:59'),
            array('slug' => 'money','name' => '{"language":{"en":{"name":"Money"},"es":{"name":null}}}','status' => '1','created_at' => '2023-07-23 07:46:11','updated_at' => '2023-07-23 07:46:11'),
            array('slug' => 'money-exchange','name' => '{"language":{"en":{"name":"Money Exchange"},"es":{"name":null}}}','status' => '0','created_at' => '2023-07-23 07:46:24','updated_at' => '2023-07-23 08:54:25')
        );

        WebJournalCategory::insert($web_journal_categories);


        //journal Section
        $journals = array(
            array('id' => '1','category_id' => '1','slug' => 'possimus-eliwe','data' => '{"language":{"en":{"title":"The Rise of Mobile Money: How XRemit Pro is Redefining Digital Finance","description":"<p>Mobile money is transforming the way people manage their finances, offering convenience, accessibility, and security. In our blog post, we explore the growing significance of mobile money solutions and how XRemit Pro is at the forefront of this digital revolution. Learn how our app seamlessly integrates with mobile money services, allowing you to send and receive funds with ease. We also delve into the benefits of digital wallets and how they\\u2019re reshaping the financial landscape. Join us on this journey through the world of digital finance and discover the future of money management.<\\/p>","tags":["tag 1"]},"es":{"title":"El auge del dinero m\\u00f3vil: c\\u00f3mo XRemit Pro est\\u00e1 redefiniendo las finanzas digitales","description":"<p>El dinero m\\u00f3vil est\\u00e1 transformando la forma en que las personas administran sus finanzas, ofreciendo conveniencia, accesibilidad y seguridad. En nuestra publicaci\\u00f3n de blog, exploramos la creciente importancia de las soluciones de dinero m\\u00f3vil y c\\u00f3mo XRemit Pro est\\u00e1 a la vanguardia de esta revoluci\\u00f3n digital. Descubra c\\u00f3mo nuestra aplicaci\\u00f3n se integra perfectamente con los servicios de dinero m\\u00f3vil, permiti\\u00e9ndole enviar y recibir fondos con facilidad. Tambi\\u00e9n profundizamos en los beneficios de las billeteras digitales y c\\u00f3mo est\\u00e1n remodelando el panorama financiero. \\u00danase a nosotros en este viaje por el mundo de las finanzas digitales y descubra el futuro de la gesti\\u00f3n del dinero.<\\/p>","tags":["tag 1"]}},"image":"seeder\\/blog.jpg"}','status' => '1','created_at' => '2023-07-19 09:41:33','updated_at' => '2023-09-10 11:55:28'),
            array('id' => '2','category_id' => '2','slug' => 'take-pride-in-offering-excellent-customer-service','data' => '{"language":{"en":{"title":"Demystifying Financial Jargon: A Guide to Money Transfer Terminology","description":"<p>Navigating the world of international money transfers can be daunting, especially with all the financial jargon involved. In this informative blog post, we break down the complex terminology commonly used in the remittance industry. From SWIFT codes to exchange rates and KYC, we provide clear explanations and practical insights to help you understand the intricacies of money transfers. Whether you\\u2019re a first-time user or a seasoned pro, this guide will empower you to make informed financial decisions.<\\/p>","tags":["tag 1","tag 2"]},"es":{"title":"Desmitificando la jerga financiera: una gu\\u00eda para la terminolog\\u00eda de transferencias de dinero","description":"<p>Navegar por el mundo de las transferencias internacionales de dinero puede resultar desalentador, especialmente con toda la jerga financiera involucrada. En esta publicaci\\u00f3n de blog informativa, desglosamos la compleja terminolog\\u00eda com\\u00fanmente utilizada en la industria de las remesas. Desde c\\u00f3digos SWIFT hasta tipos de cambio y KYC, brindamos explicaciones claras e informaci\\u00f3n pr\\u00e1ctica para ayudarlo a comprender las complejidades de las transferencias de dinero. Ya sea que sea un usuario nuevo o un profesional experimentado, esta gu\\u00eda le permitir\\u00e1 tomar decisiones financieras informadas.<\\/p>","tags":["tag 1","tag 2"]}},"image":"seeder\\/blog-1.jpg"}','status' => '1','created_at' => '2023-07-19 09:41:33','updated_at' => '2023-09-10 11:54:28'),
            array('id' => '3','category_id' => '2','slug' => 'our-remittance-website-provides-access','data' => '{"language":{"en":{"title":"The Future of Remittance: XRemit Pro\\u2019s Impact on Global Finance","description":"<p>In a world that\\u2019s more interconnected than ever, the need for efficient and secure cross-border money transfers is paramount. In our latest blog post, we delve into the revolutionary impact of XRemit Pro on global finance. Discover how this cutting-edge remittance solution is reshaping the industry, offering lightning-fast transfers, multi-currency support, and unrivaled security features. Join us as we explore the key features and benefits that make XRemit Pro the future of remittance services.<\\/p>","tags":["tag 1","tag 2"]},"es":{"title":"El futuro de las remesas: el impacto de XRemit Pro en las finanzas globales","description":"<p>En un mundo m\\u00e1s interconectado que nunca, la necesidad de transferencias de dinero transfronterizas eficientes y seguras es primordial. En nuestra \\u00faltima publicaci\\u00f3n de blog, profundizamos en el impacto revolucionario de XRemit Pro en las finanzas globales. Descubra c\\u00f3mo esta soluci\\u00f3n de remesas de vanguardia est\\u00e1 remodelando la industria, ofreciendo transferencias ultrarr\\u00e1pidas, soporte multidivisa y caracter\\u00edsticas de seguridad inigualables. \\u00danase a nosotros mientras exploramos las caracter\\u00edsticas y beneficios clave que hacen de XRemit Pro el futuro de los servicios de remesas.<\\/p>","tags":["tag 1","tag 2"]}},"image":"seeder\\/blog2.jpg"}','status' => '1','created_at' => '2023-07-19 09:41:33','updated_at' => '2023-09-10 11:53:38')
        );

        Journal::insert($journals);
    }
}
