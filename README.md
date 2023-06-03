# BatchGPT(中文&English)

## English
This project, BatchGPT, allows you to send batch requests to GPT and receive results in a simple copy and paste operation.
- If you have access to the OpenAI API in your network, you can run `index.html` on your local machine. 
- If you don't have access to the OpenAI API, you need to find your own API or use `api_p.php`. You should place `api_p.php` on your server.
## Please remember
An openAI apikey is also needed to use this code
Please remember to modify the API endpoint in `index.html` as per your setup.
Example:
```javascript
$.ajax({
    // Choose the URL as per your setup
    // url: "api_p.php",          
    url: "https://api.openai.com/v1/chat/completions",
    method: "POST",
});
```
## 简体中文 (Chinese Simplified)
这个项目，BatchGPT，允许您向GPT发送批量请求并通过简单的复制和粘贴操作接收结果。
- 如果您本机网络可以使用OpenAI API，您可以在本地计算机上运行index.html。
- 如果您不能使用OpenAI API，您需要找到自己的API或使用api_p.php。您应将api_p.php放置在您的服务器上。
## 另外需要提醒：
您需要拥有一个open AI的apikey来使用这个功能
请记住在index.html中按照您的设置修改API端点。
示例：
```javascript
$.ajax({
    // 根据您的设置选择URL
    // url: "api_p.php",          
    url: "https://api.openai.com/v1/chat/completions",
    method: "POST",
});
```
## How to contribute
Please follow the contribution guidelines provided in CONTRIBUTING.md. We welcome and appreciate any and all contributions.


Please ensure that the nested code blocks are properly closed in your actual markdown file. The markdown formatting for nested code blocks might not be rendered correctly in this output.
