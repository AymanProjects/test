import './bootstrap.js';
import { GoogleGenAI } from "@google/genai";
import { setupCarousels } from './plugins/embla/embla-main.js';
import { marked } from './plugins/marked/marked.min.js';


function setupExpandableImg() {
    const images = document.querySelectorAll(".expandable img");
    const expandedImgView = document.querySelector("#expanded-img-view");
    const expandedImg = expandedImgView.querySelector("img");
    images.forEach(img => {
        img.onclick = function () {
            expandedImg.src = img.src;
            expandedImgView.classList.add('open');
        }
    });
    expandedImgView.onclick = () => expandedImgView.classList.remove('open');;
    window.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            expandedImgView.classList.remove('open');
        }
    });
}

function setupHeader() {
    const header = document.getElementsByTagName("header")[0];
    resizeHeader(); // call for initial sizing
    window.onscroll = resizeHeader;

    function resizeHeader() {
        if (document.documentElement.scrollTop >= 10) {
            header.classList.remove('emphasized');
        } else {
            header.classList.add('emphasized');
        }
    }
}

function setupNavMenu() {
    const navMenu = document.getElementById("nav-menu");
    window.toggleNavMenu = () => {
        navMenu.classList.toggle('open');
    }
    window.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            navMenu.classList.remove('open');
        }
    })
}

function setupAI() {
    const form = document.getElementById("ai-search-form");
    const toggleButton = document.getElementById("ai-toggle-btn");
    const promptInput = document.getElementById("ai-prompt-input");
    const conversationContainer = document.getElementById("ai-conversation-container");
    const conversation = document.getElementById("ai-conversation");
    const welcomingContainer = document.getElementById("ai-welcoming-container");
    const apiKey = "AIzaSyCCPuYJeS5DAJKMEwy2A6L1qjdDi8I4xKs";
    const apiBaseUrl = "https://api.aimlapi.com";
    const googleAI = new GoogleGenAI({ apiKey: apiKey });
    var prompt;

    function toggleOpenState() {
        if (form.classList.contains('open')) {
            form.classList.remove('open');
            form.classList.add('closed');
            promptInput.blur(); // to unfocus
        } else {
            form.classList.add('open');
            form.classList.remove('closed');
            promptInput.focus();
        }
    }

    toggleButton.onclick = function () {
        toggleOpenState();
    };

    window.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            form.classList.remove('open');
            form.classList.add('closed');
            promptInput.blur(); // to unfocus
        }
    });

    window.addEventListener('keydown', function (event) {
        if (event.key === '/') {
            form.classList.add('open');
            form.classList.remove('closed');
            setTimeout(() => {
                promptInput.focus();
            }, 100); // delay to prevent '/' to be inserted in the inputfield
        }
    });

    form.addEventListener("submit", async function (event) {
        event.preventDefault(); // Prevents default form submission
        prompt = promptInput.value;
        form.classList.add('loading');
        promptInput.disabled = true;
        var response;
        try {
            const googleAIResponse = await googleAI.models.generateContent({
                model: "gemini-2.0-flash",
                contents: prompt,
            });
            response = googleAIResponse.text;

        } catch (err) {
            response = 'Sorry. An unknown error just happened.';
            console.log('AI Error', err);
        }
        conversationContainer.classList.remove('hidden');
        welcomingContainer.classList.add('invisible', 'opacity-0');
        replaceClassByPrefix(welcomingContainer, 'max-h-', 'max-h-0');
        const containerDiv = document.createElement('pre');
        containerDiv.classList.add('animate-fade-in-up', 'text-wrap');
        const promptTextDiv = document.createElement('div');
        promptTextDiv.classList.add('first-letter:uppercase', 'pb-[6px]', 'text-[#6366F1]');
        promptTextDiv.innerHTML = prompt;
        const responseTextDiv = document.createElement('div');
        responseTextDiv.classList.add('text-(--text-primary-color)/70', 'text-balance');
        responseTextDiv.innerHTML = marked.parse(response);
        containerDiv.appendChild(promptTextDiv);
        containerDiv.appendChild(responseTextDiv);
        conversation.appendChild(containerDiv);
        conversation.scrollTop = conversation.scrollHeight;
        form.reset();
        form.classList.remove('loading');
        promptInput.disabled = false;
        promptInput.focus();
        // fetch(url).then(function (response) {
        //     return response.json();
        // }).then(function (data) {
        //     console.log(data);
        // }).catch(function (err) {
        //     console.log('Fetch Error :-S', err);
        // });
    });
}

// Replace exsting css class from an element that starts with a prefix
function replaceClassByPrefix(element, prefix, newClass) {
    const pattern = '(' + prefix + '[.\\S]*(\\s|(-)?(\\w*)(\\s)?)).*?';
    const regEx = new RegExp(pattern, 'g');
    element.className = element.className.replace(regEx, newClass + " ");
}

document.addEventListener('DOMContentLoaded', () => {
    setupExpandableImg();
    setupHeader();
    setupNavMenu();
    setupAI();
    setupCarousels();
    console.log('All resources loaded!');
});
