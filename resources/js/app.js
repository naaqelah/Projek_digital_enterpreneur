import './bootstrap';
import '../css/app.css';


const slider = document.getElementById('packageSlider');
const dots = document.querySelectorAll('.dot');


if (slider) {

    slider.addEventListener('scroll', () => {


        const slideWidth = slider.querySelector('div').clientWidth;


        const index = Math.round(
            slider.scrollLeft / slideWidth
        );


        dots.forEach((dot, i) => {


            if (i === index) {

                dot.classList.remove('bg-gray-300');
                dot.classList.add('bg-[#496B2E]');

            } else {

                dot.classList.remove('bg-[#496B2E]');
                dot.classList.add('bg-gray-300');

            }


        });


    });

}