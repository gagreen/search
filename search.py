import pymysql
import requests
from BeautifulSoup import BeautifulSoup

a=[]
conn = pymysql.connect(host='52.78.104.59', user='root', password='YTkZDASW2jRP',db='', charset='utf8')
curs = conn.cursor()
 
req = requests.get("https://www.naver.com/") # connection
html = req.text # 소스 가져오기

soup = BeautifulSoup(html,'html.parser')
sillsigan = soup.select('div.ah_roll.PM_CL_realtimeKeyword_rolling_base > div > ul > li') 
b = []
for sill in sillsigan:
    b.append(sill.text) # 태그 내 문자열을 b리스트에 추가
k = 1;
list_sillsigan=[]
for i in b:    # 문자열에서 핵심 문자열만 list_sillsigan 리스트에 추가
    if k>9 :
        list_sillsigan.append(i[5:-2]) 
    else :
        list_sillsigan.append(i[4:-2])
    k += 1
for s, list in enumerate(list_sillsigan): 
    a.append(list)
    
curs.execute("insert into search values (a[0], a[1], a[2], a[3], a[4], a[5], a[6], a[7], a[8], a[9])")
