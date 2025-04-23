## Language: English

# Host Header Attack Lab Guide

## Description
This lab is designed to simulate a malicious Host Header injection attack. It includes the following components:

1. **web-app**: The main web application that users interact with.
2. **mailhog**: An email server used to capture and display emails sent by the application.
3. **webmail-ui**: A webmail interface that allows users to view received emails.
4. **attacker-server**: A malicious server used to host and send harmful links to users.

## How to Run the Lab
1. Ensure that Docker and Docker Compose are installed on your machine.
2. Run the following command to start the containers:
   ```bash
   docker-compose up -d
   ```
3. The components will be accessible on the following ports:
   - **web-app**: [http://localhost:8080](http://localhost:8080)
   - **mailhog**: [http://localhost:8025](http://localhost:8025)
   - **webmail-ui**: [http://localhost:8081](http://localhost:8081)
   - **attacker-server**: [http://localhost:8082](http://localhost:8082)

## Objectives
- Understand how a Host Header injection attack works.
- Analyze how a malicious server can send harmful links to users via email.

## Note
This lab is intended for educational and security research purposes only. Do not use it for malicious purposes or any activities that violate the law.

---------------------------------------------------------------------------------

## Language Vietnamese

# Hướng dẫn sử dụng Lab Host Header Attack

## Mô tả
Lab này được thiết kế để mô phỏng một cuộc tấn công chèn Host Header độc hại. Nó bao gồm các thành phần sau:

1. **web-app**: Ứng dụng web chính mà người dùng tương tác.
2. **mailhog**: Máy chủ email dùng để bắt và hiển thị các email được gửi bởi ứng dụng.
3. **webmail-ui**: Giao diện webmail cho phép người dùng xem các email đã nhận.
4. **attacker-server**: Máy chủ độc hại được sử dụng để lưu trữ và gửi các liên kết độc hại đến người dùng.

## Cách chạy Lab
1. Đảm bảo bạn đã cài đặt Docker và Docker Compose trên máy của mình.
2. Chạy lệnh sau để khởi động các container:
   ```bash
   docker-compose up -d
3. Các thành phần sẽ được khởi động trên các cổng sau:
   - **web-app**: [http://localhost:8080](http://localhost:8080)
   - **mailhog**: [http://localhost:8025](http://localhost:8025)
   - **webmail-ui**: [http://localhost:8081](http://localhost:8081)
   - **attacker-server**: [http://localhost:8082](http://localhost:8082)

## Mục tiêu
   - Hiểu cách một cuộc tấn công chèn Host Header hoạt động.
   - Phân tích cách máy chủ độc hại có thể gửi các liên kết độc hại đến người dùng thông qua email.

## Lưu ý
Lab này chỉ được sử dụng cho mục đích học tập và nghiên cứu bảo mật. Không sử dụng cho các mục đích xấu hoặc vi phạm pháp luật. 