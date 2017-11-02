"""
File: RPS.py
Author: CS 1510
Description: This is an automatic rock paper scissors game played
with two comptuer players.
Deadline: ONTIME
"""

import random
random.seed()

#Function getWeapon
#Inputs: no inputs
#Output: The strings "r", "p", or "s"

def getWeapon():
    """Randomly gets a weapon."""
    pick = random.randint(1,3)
    if pick==1:
        return "r"
    elif pick==2:
        return "p"
    else:
        return "s"



#Function isTie
#Inputs: playerOne weapon (character), playerTwo weapon (character)
#Output: True or False

def isTie(playerOne,playerTwo):
    """Returns True if player one and player two tie,
    False otherwise"""
    if playerOne==playerTwo:
        return True
    else:
        return False



#Function playerOneWins
#Inputs: playerOne weapon (character), playerTwo weapon (character)
#Output: True or False

def playerOneWins(playerOne,playerTwo):
    """Returns True if player one wins, False otherwise"""
    if ((playerOne=="r" and playerTwo=="s") or \
        (playerOne=="s" and playerTwo=="p") or \
        (playerOne=="p" and playerTwo=="r")):
        return True

    return False


#Function rps
#Inputs: number of games as an int
#Outputs: Returns None, but prints messages showing total ties, wins of player one,
#         and wins of player 2 with acceptible input

def rps(numberOfGames):
    """Automatically plays rock,paper,scissors with two computer players"""

    #Error checking
    if type(numberOfGames) != int or numberOfGames <=0:
        print("Rock Paper Scissors requires a positive integer")
        print("representing the number of games to be played")
        return None

    tieScore=0
    playerOneScore=0
    playerTwoScore=0

    #Play each game
    for game in range(numberOfGames):
        playerOne = getWeapon()
        playerTwo = getWeapon()
      
        if isTie(playerOne,playerTwo):
            tieScore += 1
        elif playerOneWins(playerOne,playerTwo):
            playerOneScore += 1  
        else:
            playerTwoScore += 1

    #Gather and display results to user
    results = "Total Ties="+str(tieScore)+"\n" + \
              "Player One="+str(playerOneScore)+"\n" + \
              "Player Two="+str(playerTwoScore)

    print(results)
    return None
