import sys 
from datetime import date, timedelta

def main() :
    year = int(sys.argv[1])
    month = int(sys.argv[2])
    day = int(sys.argv[3])
    mydate = date(year, month, day)
    days1 = timedelta(2)
    days2 = timedelta(5)
    is_new_week = True
    day_count = 33

    html = get_header()
    for i in range(day_count):
        html += '\n\t\t<tr>'
        html += '\n\t\t\t<td>' + mydate.strftime('%a, %m/%d')
        for j in range(3):
            html += '\n\t\t\t<td>'

        if is_new_week:
            mydate += days1
            is_new_week = False
        else:
            mydate += days2
            is_new_week = True

    html += '\n</table>'
    print html


def get_header():
    html = '<table class="schedule">'
    html += '\n\t<thead>'
    html += '\n\t\t<tr>'
    html += '\n\t\t\t<th>Date'
    html += '\n\t\t\t<th>Readings and pre-class assignments'
    html += '\n\t\t\t<th>Sessions'
    html += '\n\t\t\t<th>Homework'
    html += '\n\t<tbody>'
    return html


main()
