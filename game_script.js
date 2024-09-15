
function sendMessage() {
    const chatMessages = document.getElementById("chat_messages");
    const messageInput = document.getElementById("chat_message_input");

    if (messageInput.value.trim() !== "") {
        const newMessage = document.createElement("div");
        newMessage.textContent = messageInput.value;
        chatMessages.appendChild(newMessage);
        messageInput.value = "";
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
}