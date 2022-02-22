## Definition
A web application is said to be **stateless** when it doesn't store any information to remember a user's last visit.

## Use Cases and Examples
Modern web applications usually have their {{linkToPost('frontend', 'frontend-web-framework')}} code separate from the {{linkToPost('backend', 'web-framework')}} code and communicate through {{linkToPost('APIs', 'api')}}. 

This means whenever the frontend requests or sends data to the backend it needs to inform the backend who that data is from. The frontend has to store extra user information that can be sent to the backend acting as some form of key. 

One common way to handle this kind of {{linkToPost('authentication')}} in a stateless fashion is using techniques like {{linkToPost('JWT')}}

## Summary
When it comes to stateless applications the responsibility of remembering "who is who" is pushed to the end-user or the frontend side of things. 

This could be beneficial when it comes to scaling since the backend does not need to know the state of the user and the frontend runs on the client's device, this means in situations where one backend server is overloaded another can pick up the tab and handle the client's request.