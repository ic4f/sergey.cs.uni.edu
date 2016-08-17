import sys 
from datetime import date, timedelta

def main() :
    """
    Args:
        year: year of start date
        month: month of start date
        day: day of start date
        instruction_days: number of weekly meetings (2 or 3)
        debugging-mode (optional): any additional argument will imply 
            debugging mode
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
        html += '\n\t\t<tr>'

        html += '\n\t\t\t<td>{1}</td>'.format(instruction_days, week)

        html += '\n\t\t\t<td>' + mydate.strftime('%a, %m/%d')
        for j in range(4):
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
    print html


def get_header(instruction_days):
    html = ''
    if (len(sys.argv) == 6):
        html += '<link rel="stylesheet" href="testing.css">\n\n'

    html += '<table border=1 class="schedule days-{0}">'.format(instruction_days)
    html += '\n\t<thead>'
    html += '\n\t\t<tr>'
    html += '\n\t\t\t<th>Week'
    html += '\n\t\t\t<th>Date'
    html += '\n\t\t\t<th>Readings'
    html += '\n\t\t\t<th>Topics'
    html += '\n\t\t\t<th>Labs'
    html += '\n\t\t\t<th>Homework'
    html += '\n\t<tbody>'
    return html


main()
