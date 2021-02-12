list=[]
adet=int(input("kaç sayı girilecek?"))

for n in range(adet):

    sayi=int(input("sayı giriniz:"))

    list.append(sayi)
    
    print("listedeki en büyük sayı:", max(list))