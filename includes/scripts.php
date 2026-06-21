<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });

    function toggleMenu() {
        const menu = document.getElementById('mobile-menu');
        if (menu) menu.classList.toggle('hidden');
    }

    function setLanguage(lang) {
        document.querySelectorAll('[data-lang]').forEach(el => {
            el.classList.toggle('lang-hidden', el.getAttribute('data-lang') !== lang);
        });

        document.getElementById('btn-en').style.opacity = lang === 'en' ? '1' : '0.3';
        document.getElementById('btn-es').style.opacity = lang === 'es' ? '1' : '0.3';

        localStorage.setItem('prefLang', lang);
    }

    window.onload = () => setLanguage(localStorage.getItem('prefLang') || 'en');

    const legalTexts = {
        privacy: {
            en: {
                title: "Privacy Policy",
                content: "<h4>1. Information We Collect</h4><p>We only collect information that you voluntarily provide to us when you fill out our contact form, such as your name and email address.</p><h4>2. How We Use Your Information</h4><p>We use the information we collect to respond to your inquiries and provide you with information about our services.</p><h4>3. Data Security</h4><p>We take reasonable measures to protect your information from unauthorized access, use, or disclosure.</p>"
            },
            es: {
                title: "Política de Privacidad",
                content: "<h4>1. Información que Recopilamos</h4><p>Solo recopilamos la información que usted nos proporciona voluntariamente al completar nuestro formulario de contacto, como su nombre y dirección de correo electrónico.</p><h4>2. Cómo Utilizamos su Información</h4><p>Utilizamos la información para responder a sus consultas y proporcionarle información sobre nuestros servicios.</p><h4>3. Seguridad de los Datos</h4><p>Tomamos medidas razonables para proteger su información contra el acceso, uso o divulgación no autorizados.</p>"
            }
        },

        terms: {
            en: {
                title: "Terms of Service",
                content: "<h4>1. Acceptance of Terms</h4><p>By accessing this website, you agree to be bound by these Terms of Service and all applicable laws and regulations.</p><h4>2. Intellectual Property</h4><p>All content on this website is the property of ESI Ventures LLC and is protected by copyright and other intellectual property laws.</p>"
            },
            es: {
                title: "Términos de Servicio",
                content: "<h4>1. Aceptación de los Términos</h4><p>Al acceder a este sitio web, usted acepta estar sujeto a estos Términos de Servicio y a todas las leyes y regulaciones aplicables.</p><h4>2. Propiedad Intelectual</h4><p>Todo el contenido de este sitio web es propiedad de ESI Ventures LLC y está protegido por las leyes de derechos de autor y otras leyes de propiedad intelectual.</p>"
            }
        },

        cookies: {
            en: {
                title: "Cookie Policy",
                content: "<p>We use cookies to improve your experience on our website. Cookies are small files that are stored on your computer or mobile device when you visit a website. You can choose to disable cookies in your browser settings, but this may affect your ability to use certain features of our website.</p>"
            },
            es: {
                title: "Política de Cookies",
                content: "<p>Utilizamos cookies para mejorar su experiencia en nuestro sitio web. Las cookies son pequeños archivos que se almacenan en su computadora o dispositivo móvil. Puede optar por desactivar las cookies en la configuración de su navegador, pero esto puede afectar su capacidad para utilizar ciertas funciones.</p>"
            }
        },

        disclaimer: {
            en: {
                title: "Disclaimer",
                content: "<h4>1. No Investment Advice</h4><p>The information on this website is for informational purposes only and does not constitute investment advice. You should consult with a qualified financial advisor before making any investment decisions.</p><h4>2. Accuracy of Information</h4><p>We make every effort to ensure the accuracy of the information on this website, but we make no representations or warranties of any kind.</p>"
            },
            es: {
                title: "Aviso Legal",
                content: "<h4>1. Sin Asesoramiento de Inversión</h4><p>La información en este sitio web es solo para fines informativos y no constituye asesoramiento de inversión. Debe consultar con un asesor financiero calificado antes de tomar decisiones de inversión.</p><h4>2. Exactitud de la Información</h4><p>Hacemos todo lo posible para garantizar la exactitud de la información en este sitio web, pero no ofrecemos garantías de ningún tipo.</p>"
            }
        }
    };

    function openLegal(type) {
        const lang = localStorage.getItem('prefLang') || 'en';

        document.getElementById('modal-title').innerText =
            legalTexts[type][lang].title;

        document.getElementById('modal-content').innerHTML =
            legalTexts[type][lang].content;

        document.getElementById('legal-modal').classList.remove('hidden');
        document.getElementById('legal-modal').classList.add('flex');
    }

    function closeLegal() {
        document.getElementById('legal-modal').classList.add('hidden');
        document.getElementById('legal-modal').classList.remove('flex');
    }
</script>
</body>
</html>