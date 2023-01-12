import requests
from bs4 import BeautifulSoup

# Scrape nestjs.com
url = 'https://nestjs.com/'
response = requests.get(url)
soup = BeautifulSoup(response.text, 'html.parser')

print("Scraping nestjs.com for images and h headers:")
# Find all image elements
images = soup.find_all('img')
for image in images:
    print(image['src'])

# Find all header elements
headers = soup.find_all(['h1', 'h2', 'h3', 'h4', 'h5', 'h6'])
for header in headers:
    print(header.text)

# Scrape almdrasa.com
url = 'https://almdrasa.com/'
response = requests.get(url)
soup = BeautifulSoup(response.text, 'html.parser')

print("Scraping almdrasa.com for images and h2 headers:")
# Find all image elements
images = soup.find_all('img')
for image in images:
    print(image['src'])

# Find all h2 elements
headers = soup.find_all('h2')
for header in headers:
    print(header.text)
