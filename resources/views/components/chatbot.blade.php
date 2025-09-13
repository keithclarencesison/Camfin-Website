<div>
    <!-- Floating Chatbot -->
    <div id="chatbot-container" class="fixed bottom-6 right-6 z-50">
        <!-- Chat Toggle Button -->
        <button id="chat-toggle" class="btn btn-circle btn-primary btn-lg shadow-lg hover:shadow-xl transition-all duration-300">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
        </button>

        <!-- Chat Window -->
        <div id="chat-window" class="hidden absolute bottom-20 right-0 w-80 h-96 bg-base-100 rounded-2xl shadow-2xl border border-base-300">
            <!-- Chat Header -->
            <div class="bg-primary text-primary-content p-4 rounded-t-2xl flex justify-between items-center">
                <div>
                    <h3 class="font-semibold">Chat Support</h3>
                    <p class="text-xs opacity-80">We're here to help!</p>
                </div>
                <button id="chat-close" class="btn btn-ghost btn-sm btn-circle text-primary-content">×</button>
            </div>

            <!-- Chat Messages -->
            <div id="chat-messages" class="h-64 overflow-y-auto p-4 space-y-3">
                <div class="chat chat-start">
                    <div class="chat-bubble chat-bubble-primary">
                        Hello! How can I help you today?
                    </div>
                </div>
            </div>

            <!-- Chat Input -->
            <div class="p-4 border-t border-base-300">
                <div class="flex gap-2">
                    <input 
                        type="text" 
                        id="message-input" 
                        placeholder="Type your message..." 
                        class="input input-bordered flex-1 input-sm"
                    />
                    <button id="send-btn" class="btn btn-primary btn-sm">Send</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatToggle = document.getElementById('chat-toggle');
            const chatWindow = document.getElementById('chat-window');
            const chatClose = document.getElementById('chat-close');
            const messageInput = document.getElementById('message-input');
            const sendBtn = document.getElementById('send-btn');
            const messagesContainer = document.getElementById('chat-messages');

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            chatToggle.addEventListener('click', () => {
                chatWindow.classList.toggle('hidden');
                if (!chatWindow.classList.contains('hidden')) {
                    messageInput.focus();
                }
            });

            chatClose.addEventListener('click', () => {
                chatWindow.classList.add('hidden');
            });

            function sendMessage() {
                const message = messageInput.value.trim();
                if (message) {
                    addMessage('user', message);
                    messageInput.value = '';
                    
                    fetch('/api/chatbot', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({ message: message })
                    })
                    .then(response => {
                        if(!response.ok) {
                            throw new Error('Network response was not ok ');
                        }
                        return response.json();
                    })
                    .then(data => {
                        addMessage('bot', data.response);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        addMessage('bot', 'Sorry, I\'m having trouble right now.');
                    });
                }
            }

            function addMessage(sender, text) {
                const messageDiv = document.createElement('div');
                messageDiv.className = sender === 'user' ? 'chat chat-end' : 'chat chat-start';
                messageDiv.innerHTML = `<div class="chat-bubble ${sender === 'user' ? 'chat-bubble-accent' : 'chat-bubble-primary'}">${text}</div>`;
                messagesContainer.appendChild(messageDiv);
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }

            messageInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    sendMessage();
                }
            });

            sendBtn.addEventListener('click', sendMessage);
        });
    </script>
    @endpush
</div>