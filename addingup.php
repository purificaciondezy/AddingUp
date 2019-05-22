 <?php                       
                        echo '<tr>
                            <td><strong>Total Revenue</strong></td>';
                            
                                $RTLRdiff1 = array_sum($RTLR0) - (array_sum($RTLR2) + array_sum($RTLR3));
                                if($RTLRdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($RTLRdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($RTLRdiff1).'</td>';}

                                $RTLRdiff2 = array_sum($RTLR1) - (array_sum($RTLR2) + array_sum($RTLR3));
                                if($RTLRdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($RTLRdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($RTLRdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Total Operating Expense</strong></td>';
                            
                                $ETOEdiff1 = array_sum($ETOE0) - (array_sum($ETOE2) + array_sum($ETOE3));
                                if($ETOEdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($ETOEdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($ETOEdiff1).'</td>';}

                                $ETOEdiff2 = array_sum($ETOE1) - (array_sum($ETOE2) + array_sum($ETOE3));
                                if($ETOEdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($ETOEdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($ETOEdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Net Income After Taxes</strong></td>';
                            
                                $TIATdiff1 = array_sum($TIAT0) - (array_sum($TIAT2) + array_sum($TIAT3));
                                if($TIATdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($TIATdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($TIATdiff1).'</td>';}

                                $TIATdiff2 = array_sum($TIAT1) - (array_sum($TIAT2) + array_sum($TIAT3));
                                if($TIATdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($TIATdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($TIATdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Extraordinary Item</strong></td>';
                            
                                $XTRAdiff1 = array_sum($XTRA0) - (array_sum($XTRA2) + array_sum($XTRA3));
                                if($XTRAdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XTRAdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($XTRAdiff1).'</td>';}

                                $XTRAdiff2 = array_sum($XTRA1) - (array_sum($XTRA2) + array_sum($XTRA3));
                                if($XTRAdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XTRAdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($XTRAdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Income Available to Common Excl. Extraordinary Items </strong></td>';
                            
                                $CIACdiff1 = array_sum($CIAC0) - (array_sum($CIAC2) + array_sum($CIAC3));
                                if($CIACdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($CIACdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($CIACdiff1).'</td>';}

                                $CIACdiff2 = array_sum($CIAC1) - (array_sum($CIAC2) + array_sum($CIAC3));
                                if($CIACdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($CIACdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($CIACdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Net Income Available to Com Incl ExtraOrd</strong></td>';
                            
                                $XNICdiff1 = array_sum($XNIC0) - (array_sum($XNIC2) + array_sum($XNIC3));
                                if($XNICdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XNICdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($XNICdiff1).'</td>';}

                                $XNICdiff2 = array_sum($XNIC1) - (array_sum($XNIC2) + array_sum($XNIC3));
                                if($XNICdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XNICdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($XNICdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><a href="#STSI"><strong>Total Special Items</strong></td>';
                            
                                $STSIdiff1 = array_sum($STSI0) - (array_sum($STSI2) + array_sum($STSI3));
                                if($STSIdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($STSIdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($STSIdiff1).'</td>';}

                                $STSIdiff2 = array_sum($STSI1) - (array_sum($STSI2) + array_sum($STSI3));
                                if($STSIdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($STSIdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($STSIdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Interest Expense, Supplemental </strong></td>';
                            
                                $VIEXdiff1 = array_sum($VIEX0) - (array_sum($VIEX2) + array_sum($VIEX3));
                                if($VIEXdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VIEXdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VIEXdiff1).'</td>';}

                                $VIEXdiff2 = array_sum($VIEX1) - (array_sum($VIEX2) + array_sum($VIEX3));
                                if($VIEXdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VIEXdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VIEXdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Depreciation</strong></td>';
                            
                                $VDEPdiff1 = array_sum($VDEP0) - (array_sum($VDEP2) + array_sum($VDEP3));
                                if($VDEPdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VDEPdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VDEPdiff1).'</td>';}

                                $VDEPdiff2 = array_sum($VDEP1) - (array_sum($VDEP2) + array_sum($VDEP3));
                                if($VDEPdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VDEPdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VDEPdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Amortisation</strong></td>';
                            
                                $VAMIdiff1 = array_sum($VAMI0) - (array_sum($VAMI2) + array_sum($VAMI3));
                                if($VAMIdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMIdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VAMIdiff1).'</td>';}

                                $VAMIdiff2 = array_sum($VAMI1) - (array_sum($VAMI2) + array_sum($VAMI3));
                                if($VAMIdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMIdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VAMIdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Total Depreciation & Amortization(VDEP+VAMI)</strong></td>';
                            
                                $totalVdepVamidiff1 = array_sum($totalVdepVami0) - (array_sum($totalVdepVami2) + array_sum($totalVdepVami3));
                                if($totalVdepVamidiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($totalVdepVamidiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($totalVdepVamidiff1).'</td>';}

                                $totalVdepVamidiff2 = array_sum($totalVdepVami1) - (array_sum($totalVdepVami2) + array_sum($totalVdepVami3));
                                if($totalVdepVamidiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($totalVdepVamidiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($totalVdepVamidiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Amortisation of Goodwill</strong></td>';
                            
                                $VAMAdiff1 = array_sum($VAMA0) - (array_sum($VAMA2) + array_sum($VAMA3));
                                if($VAMAdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMAdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VAMAdiff1).'</td>';}

                                $VAMAdiff2 = array_sum($VAMA1) - (array_sum($VAMA2) + array_sum($VAMA3));
                                if($VAMAdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMAdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VAMAdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Gross Dividends - Common Stock</strong></td>';
                            
                                $DCGDdiff1 = array_sum($DCGD0) - (array_sum($DCGD2) + array_sum($DCGD3));
                                if($DCGDdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DCGDdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DCGDdiff1).'</td>';}

                                $DCGDdiff2 = array_sum($DCGD1) - (array_sum($DCGD2) + array_sum($DCGD3));
                                if($DCGDdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DCGDdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DCGDdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>DPS - Common Stock Primary Issue 1</strong></td>';
                            
                                $DDPS1diff1[] = array_sum($DDPS10) - (array_sum($DDPS12) + array_sum($DDPS13));
                                if(array_sum($DDPS1diff1)==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if(array_sum($DDPS1diff1)==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DDPS1diff1)).'</td>';}

                                $DDPS1diff2[] = array_sum($DDPS11) - (array_sum($DDPS12) + array_sum($DDPS13));
                                if(array_sum($DDPS1diff2)==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if(array_sum($DDPS1diff2)==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS1diff2)).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>DPS - Common Stock Primary Issue 2</strong></td>';
                            
                                $DDPS2diff1 = array_sum($DDPS20) - (array_sum($DDPS22) + array_sum($DDPS23));
                                if($DDPS2diff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS2diff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DDPS2diff1).'</td>';}

                                $DDPS2diff2 = array_sum($DDPS21) - (array_sum($DDPS22) + array_sum($DDPS23));
                                if($DDPS2diff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS2diff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DDPS2diff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Special DPS – Common Stock Primary Issue </strong></td>';
                            
                                $DSPS1diff1 = array_sum($DSPS10) - (array_sum($DSPS12) + array_sum($DSPS13));
                                if($DSPS1diff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DSPS1diff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DSPS1diff1).'</td>';}

                                $DSPS1diff2 = array_sum($DSPS11) - (array_sum($DSPS12) + array_sum($DSPS13));
                                if($DSPS1diff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DSPS1diff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DSPS1diff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Rental Expense, Supplemental</strong></td>'; 
                                $VRXPdiff1 = array_sum($VRXP0) - (array_sum($VRXP2) + array_sum($VRXP3));
                                if($VRXPdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VRXPdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VRXPdiff1).'</td>';}

                                $VRXPdiff2 = array_sum($VRXP1) - (array_sum($VRXP2) + array_sum($VRXP3));
                                if($VRXPdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VRXPdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VRXPdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Income Tax – Total</strong></td>';
                            
                                $VITTdiff1 = array_sum($VITT0) - (array_sum($VITT2) + array_sum($VITT3));
                                if($VITTdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VITTdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VITTdiff1).'</td>';}

                                $VITTdiff2 = array_sum($VITT1) - (array_sum($VITT2) + array_sum($VITT3));
                                if($VITTdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VITTdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VITTdiff2).'</td></tr>';}
                  


/////////////////////////prior year
                     
                        echo '<tr>
                            <td><strong>Total Revenue</strong></td>';
                            
                                $RTLRdiff1p = array_sum($RTLR0p) - (array_sum($RTLR2p) + array_sum($RTLR3p));
                                if($RTLRdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($RTLRdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($RTLRdiff1p).'</td>';}

                                $RTLRdiff2p = array_sum($RTLR1p) - (array_sum($RTLR2p) + array_sum($RTLR3p));
                                if($RTLRdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($RTLRdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($RTLRdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Total Operating Expense</strong></td>';
                            
                                $ETOEdiff1p = array_sum($ETOE0p) - (array_sum($ETOE2p) + array_sum($ETOE3p));
                                if($ETOEdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($ETOEdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($ETOEdiff1p).'</td>';}

                                $ETOEdiff2p = array_sum($ETOE1p) - (array_sum($ETOE2p) + array_sum($ETOE3p));
                                if($ETOEdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($ETOEdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($ETOEdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Net Income After Taxes</strong></td>';
                            
                                $TIATdiff1p = array_sum($TIAT0p) - (array_sum($TIAT2p) + array_sum($TIAT3p));
                                if($TIATdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($TIATdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($TIATdiff1p).'</td>';}

                                $TIATdiff2p = array_sum($TIAT1p) - (array_sum($TIAT2p) + array_sum($TIAT3p));
                                if($TIATdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($TIATdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($TIATdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Extraordinary Item</strong></td>';
                            
                                $XTRAdiff1p = array_sum($XTRA0p) - (array_sum($XTRA2p) + array_sum($XTRA3p));
                                if($XTRAdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XTRAdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($XTRAdiff1p).'</td>';}

                                $XTRAdiff2p = array_sum($XTRA1p) - (array_sum($XTRA2p) + array_sum($XTRA3p));
                                if($XTRAdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XTRAdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($XTRAdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Income Available to Common Excl. Extraordinary Items </strong></td>';
                            
                                $CIACdiff1p = array_sum($CIAC0p) - (array_sum($CIAC2p) + array_sum($CIAC3p));
                                if($CIACdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($CIACdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($CIACdiff1p).'</td>';}

                                $CIACdiff2p = array_sum($CIAC1p) - (array_sum($CIAC2p) + array_sum($CIAC3p));
                                if($CIACdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($CIACdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($CIACdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Net Income Available to Com Incl ExtraOrd</strong></td>';
                            
                                $XNICdiff1p = array_sum($XNIC0p) - (array_sum($XNIC2p) + array_sum($XNIC3p));
                                if($XNICdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XNICdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($XNICdiff1p).'</td>';}

                                $XNICdiff2p = array_sum($XNIC1p) - (array_sum($XNIC2p) + array_sum($XNIC3p));
                                if($XNICdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XNICdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($XNICdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><a href="#STSI"><strong>Total Special Items</strong></td>';
                            
                                $STSIdiff1p = array_sum($STSI0p) - (array_sum($STSI2p) + array_sum($STSI3p));
                                if($STSIdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($STSIdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($STSIdiff1p).'</td>';}

                                $STSIdiff2p = array_sum($STSI1p) - (array_sum($STSI2p) + array_sum($STSI3p));
                                if($STSIdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($STSIdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($STSIdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Interest Expense, Supplemental </strong></td>';
                            
                                $VIEXdiff1p = array_sum($VIEX0p) - (array_sum($VIEX2p) + array_sum($VIEX3p));
                                if($VIEXdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VIEXdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VIEXdiff1p).'</td>';}

                                $VIEXdiff2p = array_sum($VIEX1p) - (array_sum($VIEX2p) + array_sum($VIEX3p));
                                if($VIEXdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VIEXdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VIEXdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Depreciation</strong></td>';
                            
                                $VDEPdiff1p = array_sum($VDEP0p) - (array_sum($VDEP2p) + array_sum($VDEP3p));
                                if($VDEPdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VDEPdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VDEPdiff1p).'</td>';}

                                $VDEPdiff2p = array_sum($VDEP1p) - (array_sum($VDEP2p) + array_sum($VDEP3p));
                                if($VDEPdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VDEPdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VDEPdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Amortisation</strong></td>';
                            
                                $VAMIdiff1p = array_sum($VAMI0p) - (array_sum($VAMI2p) + array_sum($VAMI3p));
                                if($VAMIdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMIdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VAMIdiff1p).'</td>';}

                                $VAMIdiff2p = array_sum($VAMI1p) - (array_sum($VAMI2p) + array_sum($VAMI3p));
                                if($VAMIdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMIdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VAMIdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Total Depreciation & Amortization(VDEP+VAMI)</strong></td>';
                            
                                $totalVdepVamidiff1p = array_sum($totalVdepVami0p) - (array_sum($totalVdepVami2p) + array_sum($totalVdepVami3p));
                                if($totalVdepVamidiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($totalVdepVamidiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($totalVdepVamidiff1p).'</td>';}

                                $totalVdepVamidiff2p = array_sum($totalVdepVami1p) - (array_sum($totalVdepVami2p) + array_sum($totalVdepVami3p));
                                if($totalVdepVamidiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($totalVdepVamidiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($totalVdepVamidiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Amortisation of Goodwill</strong></td>';
                            
                                $VAMAdiff1p = array_sum($VAMA0p) - (array_sum($VAMA2p) + array_sum($VAMA3p));
                                if($VAMAdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMAdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VAMAdiff1p).'</td>';}

                                $VAMAdiff2p = array_sum($VAMA1p) - (array_sum($VAMA2p) + array_sum($VAMA3p));
                                if($VAMAdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMAdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VAMAdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Gross Dividends - Common Stock</strong></td>';
                            
                                $DCGDdiff1p = array_sum($DCGD0p) - (array_sum($DCGD2p) + array_sum($DCGD3p));
                                if($DCGDdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DCGDdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DCGDdiff1p).'</td>';}

                                $DCGDdiff2p = array_sum($DCGD1p) - (array_sum($DCGD2p) + array_sum($DCGD3p));
                                if($DCGDdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DCGDdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DCGDdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>DPS - Common Stock Primary Issue 1</strong></td>';
                            
                                $DDPS1diff1p[] = array_sum($DDPS10p) - (array_sum($DDPS12p) + array_sum($DDPS13p));
                                if(array_sum($DDPS1diff1p)==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if(array_sum($DDPS1diff1p)==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DDPS1diff1p)).'</td>';}

                                $DDPS1diff2p[] = array_sum($DDPS11p) - (array_sum($DDPS12p) + array_sum($DDPS13p));
                                if(array_sum($DDPS1diff2p)==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if(array_sum($DDPS1diff2p)==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS1diff2p)).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>DPS - Common Stock Primary Issue 2</strong></td>';
                            
                                $DDPS2diff1p = array_sum($DDPS20p) - (array_sum($DDPS22p) + array_sum($DDPS23p));
                                if($DDPS2diff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS2diff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DDPS2diff1p).'</td>';}

                                $DDPS2diff2p = array_sum($DDPS21p) - (array_sum($DDPS22p) + array_sum($DDPS23p));
                                if($DDPS2diff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS2diff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DDPS2diff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Special DPS – Common Stock Primary Issue </strong></td>';
                            
                                $DSPS1diff1p = array_sum($DSPS10p) - (array_sum($DSPS12p) + array_sum($DSPS13p));
                                if($DSPS1diff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DSPS1diff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DSPS1diff1p).'</td>';}

                                $DSPS1diff2p = array_sum($DSPS11p) - (array_sum($DSPS12p) + array_sum($DSPS13p));
                                if($DSPS1diff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DSPS1diff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DSPS1diff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Rental Expense, Supplemental</strong></td>'; 
                                $VRXPdiff1p = array_sum($VRXP0p) - (array_sum($VRXP2p) + array_sum($VRXP3p));
                                if($VRXPdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VRXPdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VRXPdiff1p).'</td>';}

                                $VRXPdiff2p = array_sum($VRXP1p) - (array_sum($VRXP2p) + array_sum($VRXP3p));
                                if($VRXPdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VRXPdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VRXPdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Income Tax – Total</strong></td>';
                            
                                $VITTdiff1p = array_sum($VITT0p) - (array_sum($VITT2p) + array_sum($VITT3p));
                                if($VITTdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VITTdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VITTdiff1p).'</td>';}

                                $VITTdiff2p = array_sum($VITT1p) - (array_sum($VITT2p) + array_sum($VITT3p));
                                if($VITTdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VITTdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VITTdiff2p).'</td></tr>';}
                            
                        ?>