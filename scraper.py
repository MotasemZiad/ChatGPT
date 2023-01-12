import requests
from bs4 import BeautifulSoup

url = 'https://nestjs.com/'
response = requests.get(url)
soup = BeautifulSoup(response.text, 'html.parser')

# Find all image elements
images = soup.find_all('img')
for image in images:
    print(image['src'])

# Find all header elements
headers = soup.find_all(['h1', 'h2', 'h3', 'h4', 'h5', 'h6'])
for header in headers:
    print(header.text)
