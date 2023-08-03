# web-NLP-1
# To create a remote control system using HTML, PHP, and SQL, you'll need the following components:

1. HTML: For creating the user interface.
2. PHP: For handling server-side logic and interacting with the database.
3. SQL: For storing and retrieving remote control instructions.

Here's an example code that demonstrates a basic remote control system:.

![Capture](https://github.com/laylaAm/web-NLP-1/assets/139586277/0a94cbc5-0410-429f-8e15-0b8cce593fcd)

# After clicking on any button, the remote_controls.php page will pop up and ensure that the process is successful, followed by the value inserted.

![Capture1](https://github.com/laylaAm/web-NLP-1/assets/139586277/0141bcc6-01e8-4b40-a6f6-6795537e5cc6)

# here is the database named as smart. consistence of 3 columns

```linux
CREATE TABLE smart (
    id INT PRIMARY KEY AUTO_INCREMENT,
    direction VARCHAR(10) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

![Capture2](https://github.com/laylaAm/web-NLP-1/assets/139586277/7bc20792-d220-40fe-ad4d-dbdf208f5601)
