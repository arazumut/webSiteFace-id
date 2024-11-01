import cv2

face_cascade = cv2.CascadeClassifier(r"haarcascade_frontalface_default.xml")
eye_cascade = cv2.CascadeClassifier(r"haarcascade_eye.xml")

#Produced By K. Umut Araz

previous_faces = {}

cap = cv2.VideoCapture(0)

while cap.isOpened():
    ret, img = cap.read()

    img = cv2.flip(img, 1)

    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)

    faces = face_cascade.detectMultiScale(gray, 1.4, 6)
    
    for (x, y, w, h) in faces:
     
        face_id = (x, y, x+w, y+h)

     
        if face_id not in previous_faces:
            cv2.rectangle(img, (x, y), (x+w, y+h), (0, 255, 0), 3)
            cv2.putText(img, "Yeni Bir Yüz Algilandi. Lütfen Siz Oldugunuzu Dogrulayin!", (x, y-10), cv2.FONT_HERSHEY_SIMPLEX, 0.9, (0, 255, 0), 2)
            previous_faces[face_id] = True
        else:
        
            cv2.rectangle(img, (x, y), (x+w, y+h), (0, 255, 255), 3)
            cv2.putText(img, "Guvenilir Yuz Algilandi. Web Sitesine Hoşgeldiniz!", (x, y-10), cv2.FONT_HERSHEY_SIMPLEX, 0.9, (0, 255, 255), 2)

        roi_gray = gray[y:y+h, x:x+w]
        eyes = eye_cascade.detectMultiScale(roi_gray)
        for (ex, ey, ew, eh) in eyes:
            cv2.rectangle(img, (x+ex, y+ey), (x+ex+ew, y+ey+eh), (255, 0, 0), 2)
            cv2.putText(img, "Eye", (x+ex, y+ey-5), cv2.FONT_HERSHEY_SIMPLEX, 0.5, (255, 0, 0), 2)

    cv2.imshow("İlk Defa Görülen Bir Yüz Algılandı. Siz Olduğunuzu Doğrulayın!", img)

    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

cap.release()
cv2.destroyAllWindows()
