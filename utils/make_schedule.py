import sys 
from datetime import date, timedelta

def main():
    """
    Args:
        year: year of start date
        month: month of start date
        day: day of start date
        instruction_days: number of weekly meetings (2 or 3)
        - debug mode: any additional parameter (optional)
    """
    year = int(sys.argv[1])
    month = int(sys.argv[2])
    day = int(sys.argv[3])
    instruction_days = int(sys.argv[4])

    WEEKS = 16 #weeks in a semester
    
    mydate = date(year, month, day)
    day_count = WEEKS * instruction_days + 1 #last day for final exam 

    html = get_header(instruction_days)
    counter = 0
    week = 1

    for i in range(day_count):

        if instruction_days == 2:
            if (i % 2 == 0):
                html += '\n\t\t<tr class="week">'
                html += '\n\t\t\t<td rowspan="2">{1}'.format(instruction_days, week)
            else:
                html += '\n\t\t<tr>'
        elif instruction_days == 3:
            if (i % 3 == 0):
                html += '\n\t\t<tr class="week">'
                html += '\n\t\t\t<td rowspan="3">{1}'.format(instruction_days, week)
            else:
                html += '\n\t\t<tr>'

        html += '\n\t\t\t<td>' + mydate.strftime('%a, %m/%d')

        for j in range(3):
            html += '\n\t\t\t<td>'

        if instruction_days == 2:
            if counter == 0:
                mydate += timedelta(2)
                counter += 1
            else:
                mydate += timedelta(5)
                counter = 0
                week += 1
        elif instruction_days == 3:
            if counter == 2:
                mydate += timedelta(3)
                counter = 0
                week += 1
            else:
                mydate += timedelta(2)
                counter += 1

    html += '\n</table>'
    print(html)


def get_header(instruction_days):
    html = ''
    if (len(sys.argv) == 6):
        html += '<link rel="stylesheet" href="testing.css">\n\n'

    html += '<table border=1 class="schedule days-{0}">'. \
        format(instruction_days)
    html += '\n\t<thead>'
    html += '\n\t\t<tr>'
    html += '\n\t\t\t<th>Week'
    html += '\n\t\t\t<th>Date'
    html += '\n\t\t\t<th>Readings'
    html += '\n\t\t\t<th>Sessions &amp; Labs'
    html += '\n\t\t\t<th>Assignments'
    html += '\n\t<tbody>'
    return html


main()
