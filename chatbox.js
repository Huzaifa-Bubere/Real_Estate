
		// MESSAGE INPUT
		const textarea = document.querySelector('.chatbox-message-input')
		const chatboxForm = document.querySelector('.chatbox-message-form')

		textarea.addEventListener('input', function () {
			let line = textarea.value.split('\n').length

			if (textarea.rows < 6 || line < 6) {
				textarea.rows = line
			}

			if (textarea.rows > 1) {
				chatboxForm.style.alignItems = 'flex-end'
			} else {
				chatboxForm.style.alignItems = 'center'
			}
		})

		// TOGGLE CHATBOX - OPENING 

		const chatboxToggle = document.querySelector('.chatbox-toggle')
		const chatboxMessage = document.querySelector('.chatbox-message-wrapper')

        function showcb(){
            chatboxMessage.style.display="block";
        }
        function hidecb(){
            chatboxMessage.style.display="none";
        }
		// chatboxToggle.addEventListener('click', function () {
		// 	chatboxMessage.classList.toggle('show')
		// })

		// // TOGGLE CHATBOX - CLOSING
		// chatboxToggle.addEventListener('click', function () {
		// 	chatboxMessage.classList.toggle('close')
        //     document.querySelector('.chatbox-message-content').innerHTML="";
		// })

		// DROPDOWN TOGGLE
		// const dropdownToggle = document.querySelector('.chatbox-message-dropdown-toggle')
		// const dropdownMenu = document.querySelector('.chatbox-message-dropdown-menu')

		// dropdownToggle.addEventListener('click', function () {
		// 	dropdownMenu.classList.toggle('show')
		// })

		// dropdownToggle.addEventListener('click', function () {
		// 	dropdownMenu.classList.toggle('close')
		// })

		// document.addEventListener('click', function (e) {
		// 	if (!e.target.matches('.chatbox-message-dropdown, .chatbox-message-dropdown *')) {
		// 		dropdownMenu.classList.remove('show')
		// 	}
		// })

		// CHATBOX MESSAGE
		const chatboxMessageWrapper = document.querySelector('.chatbox-message-content')
		const chatboxNoMessage = document.querySelector('.chatbox-message-no-message')

		// Define an object with an array of messages.
		const chatMessages = {
			messages: [
				"Hello, how can I help you?",
				"Welcome to our chat!",
				"What can I assist you with today?",
				"Feel free to ask any questions.",
				"I'm here to provide support.",
				"Do you have any specific questions about the property? I'm here to provide you with all the information you need to make an informed decision.",
				"I'm open to reasonable offers. If you're interested in making an offer, please let me know, and we can discuss the details. We can work together to find a price that suits both parties.",
				"Take your time to think about it. Buying a house is a big decision, and I'm here to support you in any way I can. When you're ready, just reach out, and we can move forward.",
				"Thank you for your interest. When can we schedule a viewing?",
				"Any specific questions about the property?",
				"Take your time; I'm here when you're ready.",
				"Im committed to making this process as smooth as possible for you.",
				"Looking forward to helping you find your dream home!",
			],

			// Function to get a random message from the array.
			getRandomMessage: function () {
				const randomIndex = Math.floor(Math.random() * this.messages.length);
				return this.messages[randomIndex];
			},
		};

		// Add a submit event listener to the chatbox form.
		chatboxForm.addEventListener('submit', function (e) {
			e.preventDefault();

			// Generate a random message from the chatMessages object.
			const randomMessage = chatMessages.getRandomMessage();

			// Display the randomly selected message in the chatbox.
			addChatMessage("user", textarea.value);
			addChatMessage("bot", randomMessage);
		});

		// Function to add a message to the chatbox.
		function addChatMessage(sender, message) {
			const today = new Date();
			const messageClass = sender === "user" ? "sent" : "received";
			const messageHTML = `
    <div class="chatbox-message-item ${messageClass}">
        <span class="chatbox-message-item-text">
            ${message}
        </span>
        <span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(today.getMinutes())}</span>
    </div>
  `;
			chatboxMessageWrapper.insertAdjacentHTML('beforeend', messageHTML);
			scrollBottom();
			textarea.value = '';
		}

		function addZero(num) {
			return num < 10 ? '0' + num : num
		}

		function writeMessage() {
			const today = new Date()
			let message = `
		<div class="chatbox-message-item sent">
			<span class="chatbox-message-item-text">
				${textarea.value.trim().replace(/\n/g, '<br>\n')}
			</span>
			<span class="chatbox-message-item-time">${addZero(today.getHours())}:${addZero(today.getMinutes())}</span>
		</div>
	`
			chatboxMessageWrapper.insertAdjacentHTML('beforeend', message)
			chatboxForm.style.alignItems = 'center'
			textarea.rows = 1
			textarea.focus()
			textarea.value = ''
			chatboxNoMessage.style.display = 'none'
			scrollBottom()
		}

		function scrollBottom() {
			chatboxMessageWrapper.scrollTo(0, chatboxMessageWrapper.scrollHeight)
		}

		function isValid(value) {
			let text = value.replace(/\n/g, '')
			text = text.replace(/\s/g, '')

			return text.length > 0
		}
	